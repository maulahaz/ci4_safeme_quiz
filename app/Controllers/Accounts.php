<?php 
namespace App\Controllers;
use App\Models\Accounts_mdl;

class Accounts extends BaseController
{
    public function __construct()
    {
        $session = \Config\Services::session();
    }

	public function index()
	{
        return redirect()->to('accounts/list');
    }

    function dashboardX()
    {
        $data['loginID'] = getUserInfo('Usr_id');

        $data['title'] = "Account - SafeMe Apps by MHz";
        $data['pageTitle'] = "Accounts Dashboard";
        // $data['flashMsg'] = session()->getFlashdata('flashMsg');
        // $data['jsFile'] = "accounts/js_accounts";
        return view('templates/londinium/v_dashboard', $data);
    }

    function dashboard()
    {
        $data['loginID'] = getUserInfo('Usr_id');

        $data['title'] = "Account - SafeMe Apps by MHz";
        $data['pageTitle'] = "Accounts Dashboard";
        // $data['flashMsg'] = session()->getFlashdata('flashMsg');
        // $data['jsFile'] = "accounts/js_accounts";
        return view('accounts/v_dashboard', $data);
    }

    function list()
    {
        $model = new Accounts_mdl();

        $data['loginID'] = getUserInfo('Usr_id');

        $data['qryAccounts'] = $model->getData();
        $data['title'] = "Account - SafeMe Apps by MHz";
        $data['pageTitle'] = "Accounts List";
        // $data['flashMsg'] = session()->getFlashdata('flashMsg');
        $data['jsFile'] = "accounts/js_accounts";
        return view('accounts/v_list', $data);
    }

    function edit($updateID = null)
    {
        isAdmin();
        echo "Edit $updateID";
    }

    function delete()
    {
        isLoggedin();
        isAdmin();
        $updateID = null;
        echo "Delete $updateID";
    }

    function profile()
    {
        $accountsModel = new Accounts_mdl();

        $loginID = getUserInfo('Usr_id');
        $data['loginID'] = $loginID;

        $data['qryProfile'] = $accountsModel->getWhere(['Usr_id' => $loginID]);
        // dd($data['qryProfile']);
        $data['title'] = "Account - SafeMe Apps by MHz";
        $data['pageTitle'] = "Account Profile";

        $submit = $this->request->getVar('btn_submit');
        if($submit == 'Update'){
            // $post = $this->request->getPost();
            // dd($post);
            $uid = $this->request->getVar('uid');
            $data['Name'] = $this->request->getVar('name');
            $data['Nickname'] = $this->request->getVar('nickname');
            $data['Birth_dt'] = $this->request->getVar('birth_date');
            $data['Email'] = $this->request->getVar('email');
            $data['Phone1'] = $this->request->getVar('phone1');
            $data['Phone2'] = $this->request->getVar('phone2');
            $data['Address'] = $this->request->getVar('address');
            
            $accountsModel->update($uid, $data);

            session()->setFlashdata('success', 'Account profile has been updated.');
            return redirect()->to(base_url('accounts/profile')); 
        }

        // $data['errorMsg'] = session()->getFlashdata('errorMsg');
        $data['jsFile'] = "accounts/js_accounts";
        return view('accounts/v_profile', $data);
    }   

    function privacy()
    {
        $model = new Accounts_mdl();

        $loginID = getUserInfo('Usr_id');
        $data['loginID'] = $loginID;

        $data['qryPrivacy'] = $model->getWhere(['Usr_id' => $loginID]);
        // dd($data['qryProfile']);
        $data['title'] = "Account - SafeMe Apps by MHz";
        $data['pageTitle'] = "Account Privacy - Change Password";
        $data['errorMsg'] = session()->getFlashdata('errorMsg');
        $data['flashMsg'] = session()->getFlashdata('flashMsg');
        $data['jsFile'] = "accounts/js_accounts";
        return view('accounts/v_privacy', $data);
    } 

    function changepass()
    {
        //==Libraries:
        $model = new Accounts_mdl();

        //==Form Validation:
        $rules = [
            'old_pwd' => 'required|min_length[5]|max_length[20]',
            'usr_pwd' => 'required|min_length[5]|max_length[20]|matches[usr_pwd2]',
            'usr_pwd2' => 'required|min_length[5]|max_length[20]|matches[usr_pwd]',
        ];
        $errors = [
            'old_pwd' => ['required' => 'Old Password is required field', 'labels' => 'Old Password'],
            'usr_pwd' => ['required' => 'New Password is required field', 'matches' => 'Password doesn\'t match', 'labels' => 'New Password'],
            'usr_pwd2' => ['required' => 'Confirm Password is required field', 'matches' => 'Confirm Password doesn\'t match', 'labels' => 'Confirm Password'],
        ];

        if (! $this->validate($rules, $errors)) {
            // $errMsg = $this->validator;
            $errMsg = \Config\Services::validation()->listErrors();
            session()->setFlashdata('errorMsg', $errMsg);
            // return redirect()->to(base_url('/auths/signin'));
            return redirect()->back()->withInput();
        }
        
        $usrID = $this->request->getVar('usr_id');
        $oldPwd = sha1($this->request->getVar('old_pwd'));

        $newData['Usr_pwd'] = sha1($this->request->getVar('usr_pwd'));

        $checkOldPass = $model->where(['Usr_id' => $usrID, 'Usr_pwd' => $oldPwd])->first();
        if($checkOldPass){
            $model->update(['Usr_id' => $usrID], $newData);
            $msg = '<div class="alert alert-primary" role="alert">Password successfully changed.</div>';
            session()->setFlashdata('flashMsg', $msg);
            return redirect()->to(base_url('accounts/dashboard'));
        }else{
            $msg = '<div class="errors role="alert">
                    <ul>
                        <li>Wrong Old Password</li>
                    </ul>
                    </div>';
            session()->setFlashdata('flashMsg', $msg);
            return redirect()->to(base_url('/accounts/privacy'));
        }
        
    }

    function checkSha1($pass){
        echo sha1($pass);
    }

}
