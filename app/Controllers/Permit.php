<?php namespace App\Controllers;

use App\Models\Permit_mdl;

class Permit extends BaseController
{
    private $title = "SafeMe - SmartXL Apps by MHz";
    protected $permitModel;
    protected $validation;

    function __construct()
    {
        //==Security, isLoggedin:
        $isLoggedin = session()->get('isLoggedin');
        if($isLoggedin == FALSE){
            header('Location: '.base_url('auths/signin'));
            exit();
        }

        $this->permitModel = new Permit_mdl();
        $this->validation = \Config\Services::validation();
    }
  
	public function index()
	{
        // echo 'Test : date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
        return redirect()->to('permit/list');
    }

    function list(){

        $data['loginID'] = getUserInfo('Usr_id');

        $dtPermits = $this->permitModel->orderBy('uid', 'DESC')->findAll();
        // dd($dtPermits);
        $data['title'] = $this->title;
        $data['pageTitle'] = "Permit List";
        $data['dtPermits'] = $dtPermits;
        // $data['jsFile'] = "keyreg/js_permit_list";
        return view('permit/v_list', $data);
    }

    function create(){

        $updateID = $this->request->uri->getSegment(3);
        $submit = $this->request->getVar('btn_save');
        if($submit == 'Save'){
            // $this->_createValidation();
            $valid = $this->validate([
                'type'  => 'required',
                'title' => 'required',
                'descr'=> 'required',
                'status'=> 'required'
            ]);

            if ($valid){
                // die('ok');
                $data['Type'] = $this->request->getVar('type');
                $data['Title'] = $this->request->getVar('title');
                $data['Descr'] = $this->request->getVar('descr');
                $data['Status'] = $this->request->getVar('status');
                //if $updateID is NOT NULL it's mean UPDATE DATA
                if($updateID){
                    $this->permitModel->update(['uid' => $updateID], $data);
                    session()->setFlashdata('success', 'Data updated.');
                } 
                //if $updateID is NULL it's mean CREATE NEW DATA -- INSERT Method not SAVE
                else{
                    $this->permitModel->save($data);
                    session()->setFlashdata('success', 'New data created.');
                }
                
                return redirect()->to(base_url('/permit/list'));
            }else{
                $data['errors'] = array($this->validation->listErrors());             }
        }

        if((!empty($updateID)) && ($submit != 'Save')){
            $data['editData']  = $this->permitModel->find($updateID);
        }

        $data['loginID'] = getUserInfo('Usr_id');
        $data['updateID'] = $updateID;
        $data['title'] = $this->title;
        $data['pageTitle'] = "Create permit";
        // $data['jsFile'] = "permit/js_permit_create";
        return view('permit/v_create', $data);
    }   

}
