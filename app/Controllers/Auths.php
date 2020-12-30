<?php 
namespace App\Controllers;
use App\Models\Accounts_mdl;

class Auths extends BaseController
{
	public function index()
	{
        // die('Permit Index');
        return redirect()->to('auths/signin');
    }

    function signin()
    {
 
        $data['title'] = "Authorization - SafeMe Apps";
        $data['pageTitle'] = "Sign in";
        $data['flashMsg'] = session()->getFlashdata('flashMsg');
        $data['errorMsg'] = session()->getFlashdata('errorMsg');
        $data['jsFile'] = "auths/js_auths";
        return view('auths/v_signin', $data);
    }

    function signin_exe()
    {
        $model = new Accounts_mdl();

        //==Form Validation
        $rules = [
            'usr_id' => 'required',
            'usr_pwd' => 'required',
            // 'email' => 'required|min_length[6]|max_length[50]|valid_email',
            // 'password' => 'required|min_length[8]|max_length[255]|validateUser[email,password]',
        ];
        if (! $this->validate($rules)) {
            $errMsg = $this->validator;
            session()->setFlashdata('errorMsg', $errMsg);
            return redirect()->to(base_url('/auths/signin'));
        }
        
        $usrID = $this->request->getVar('usr_id');
        $usrPwd = sha1($this->request->getVar('usr_pwd'));

        $checkUser = $model->where(['Usr_id' => $usrID, 'Usr_pwd' => $usrPwd])->first();

        if($checkUser){
            $dataUserSession = [
                'uid' => $checkUser['uid'],
                'Usr_id' => $checkUser['Usr_id'],
                'Post' => $checkUser['Position'],
                'Role_id' => $checkUser['Role_id'],
                'Name' => $checkUser['Name'],
                'Address' => $checkUser['Address'],
                'Email' => $checkUser['Email'],
                'Phone' => $checkUser['Phone1'],
                'isLoggedin' => true,
            ];
            // dd($dataUserSession);
            session()->set($dataUserSession);
            return redirect()->to(base_url('accounts/dashboard'));
        } else{
            $msg = '<div class="errors role="alert"><ul>
                <li>Wrong Username / Password</li>
            </ul></div>';
            session()->setFlashdata('flashMsg', $msg);
            return redirect()->to(base_url('/auths/signin'));
        }
    }

    public function signup(){
        //==Libraries:
        $model = new Accounts_mdl();

        //==Form Validation:
        $rules = [
            'usr_id' => 'required|min_length[5]|max_length[20]|is_unique[tbl_accounts.Usr_id]',
            'email' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[tbl_accounts.Email]',
            'usr_pwd' => 'required|min_length[5]|max_length[20]|matches[usr_pwd2]',
            'usr_pwd2' => 'required|min_length[5]|max_length[20]|matches[usr_pwd]',
        ];
        $errors = [
            'usr_id' => ['is_unique' => 'User ID already registered', 'labels' => 'User ID'],
            'email' => ['is_unique' => 'Email ID already registered'],
            'usr_pwd' => ['matches' => 'Password doesn\'t match', 'labels' => 'Password'],
            'usr_pwd2' => ['matches' => 'Confirm Password doesn\'t match', 'labels' => 'Confirm Password'],
        ];

        if (! $this->validate($rules, $errors)) {
            // $errMsg = $this->validator;
            $errMsg = \Config\Services::validation()->listErrors();
            session()->setFlashdata('errorMsg', $errMsg);
            // return redirect()->to(base_url('/auths/signin'));
            return redirect()->back()->withInput();
        }
        
        $newData['Usr_id'] = $this->request->getVar('usr_id');
        $newData['Usr_pwd'] = sha1($this->request->getVar('usr_pwd'));
        $newData['Email'] = $this->request->getVar('email');

        $model->save($newData);     
        $msg = '<div class="alert alert-primary" role="alert">New data created.</div>';

        //==Back to List
        session()->setFlashdata('flashMsg', $msg);
        return redirect()->to(base_url('accounts/dashboard'));
    }

    public function signout(){
        session()->destroy();
        return redirect()->to(base_url());
    }   

}
