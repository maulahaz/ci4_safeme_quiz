<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Keyreg_mdl;
use App\Models\Accounts_mdl;
use TPdf;

class Keyreg extends BaseController
{

    public function index()
	{
        // dd(session()->get('Name'));
        return redirect()->to('keyreg/list');
    }

    function test()
    {
        $model = new Keyreg_mdl();
        $qry = $model->getKeyreg(2);
        dd($qry);
    }

    function list()
    {      
        $model = new Keyreg_mdl();

        $data['loginID'] = getUserInfo('Usr_id');

        $data['qryKeyreg'] = $model->orderBy('uid', 'DESC')->findAll();
        $data['title'] = "XLPE Key Register - SafeMe Apps";
        $data['pageTitle'] = "Key Registration List";
        $data['flashMsg'] = session()->getFlashdata('flashMsg');
        // $data['viewFile'] = "keyreg/v_list_1";
        $data['jsFile'] = "keyreg/js_keyreg";
        // return view('template/v_admin', $data);
        return view('keyreg/v_list', $data);
    }

    function create()
    {
        // die('Permit List');
        $model = new Keyreg_mdl();

        $data['loginID'] = getUserInfo('Usr_id');

        $data['qryKeyreg'] = $model->orderBy('uid', 'DESC')->findAll();
        $data['title'] = "XLPE Key Register - SafeMe Apps";
        $data['pageTitle'] = "Create Key Registration";
        $data['userOptions'] = $this->getUserForOption();
        $data['errorMsg'] = session()->getFlashdata('errorMsg');
        $data['jsFile'] = "keyreg/js_keyreg";
        return view('keyreg/v_create', $data);
    }
    
    function edit($uid = null)
    {
        $model = new Keyreg_mdl();

        // $qry = $model->getKeyreg($uid);
        // dd($qry);

        $data['qryKeyreg'] = $model->getKeyreg($uid);
        $data['loginID'] = getUserInfo('Usr_id');
        $data['title'] = "XLPE Key Register - SafeMe Apps";
        $data['pageTitle'] = "Edit Key Registration";
        $data['userOptions'] = $this->getUserForOption();
        $data['errorMsg'] = session()->getFlashdata('errorMsg');
        $data['jsFile'] = "keyreg/js_keyreg";
        return view('keyreg/v_edit', $data);
    }

    function save($updateID = null)
    {
        $validation = \Config\Services::validation();
        // helper(['form', 'url']); //--Udah di reg di BaseController
        // dd($this->request->getVar());
        $model = new Keyreg_mdl();

        //==Validasi
        $val = $this->validate([
            'kr_type' => 'required',
            'taken_date' => 'required',
            'taken_time' => 'required',
            'taken_by' => 'required',
            'reason' => 'required|min_length[5]',
            'return_date' => 'required',
            'return_time' => 'required',
            'return_by' => 'required',
        ]);

        if(!$val){
            //==========Alt-3
            // $errMsg = array('error' => $validation->listErrors()); 
            $errMsg = array($validation->listErrors()); 
            // $errMsg = $this->validator; 
            // dd($errMsg);
            session()->setFlashdata('errorMsg', $errMsg);
            return redirect()->to(base_url('/keyreg/create'));
            
            //==========Alt-0
            // $validationErrors = $this->validator;
            // dd($validationErrors);
            // return redirect()->to('/keyreg/create')->withInput()->with('validationErrors', $validationErrors);
            
            //==========Alt-1
            // $validation = \Config\Services::validation(); 
            // // dd($validation);
            // return redirect()->to('/keyreg/create')
            //                 ->withInput()
            //                 ->with('validation', $validation);
            //----
            // $data['title'] = "XLPE Key Register - SafeMe";
            // $data['pageTitle'] = "Create Key Registration";
            // $data['validation'] = $this->validator;
            // $data['viewFile'] = "keyreg/v_create";
            // return view('template/v_admin', $data);            
        }

        //==Setup data to DB
        $selectedKeyreg = implode(',', $this->request->getVar('kr_type'));
        $takenDatetime = $this->request->getVar('taken_date')." ".$this->request->getVar('taken_time');
        $returnDatetime = $this->request->getVar('return_date')." ".$this->request->getVar('return_time');

        $data = [
            // 'uid'  => 4,
            'Keyreg_type'   => $selectedKeyreg,
            // 'Taken_dtm'     => $this->request->getVar('taken_date'),
            'Taken_dtm'     => get_nice_date($takenDatetime, "mysql"),
            'Taken_by'      => $this->request->getVar('taken_by'),
            'Reason'        => $this->request->getVar('reason'),
            // 'Return_dtm'    => $this->request->getVar('return_date'),
            'Return_dtm'    => get_nice_date($returnDatetime, "mysql"),
            'Return_by'     => $this->request->getVar('return_by'),
            'Notes'         => $this->request->getVar('notes')
        ];
        
        //==Save or Update
        if($updateID){
            $model->update(['uid' => $updateID], $data);
            // echo "update success";
            $msg = '<div class="alert alert-primary" role="alert">Update success.</div>';
        } else{
            // $model->insert($data);
            $model->save($data);
            // echo "new data created";
            $msg = '<div class="alert alert-primary" role="alert">New data created.</div>';
        }

        //==Back to List
        session()->setFlashdata('flashMsg', $msg);
        // dd(session()->getFlashdata('flashMsg'));
        return redirect()->to(base_url('/keyreg/list'));

    }

    function delete($updateID)
    {
        $model = new Keyreg_mdl();

        $model->delete(['uid' => $updateID]);

        $msg = '<div class="alert alert-primary" role="alert">Delete success.</div>';
        session()->setFlashdata('flashMsg', $msg);
        return redirect()->to(base_url('/keyreg/list'));
    }

    function report()
    {
        $model = new Keyreg_mdl();
        //==TCPDF:
        // $pdf = new TPdf();
        // dd($pdf);
        // $pdf = new TPdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
        // $pdf->Output('example.pdf', 'I');
        // exit();                 

        $data['loginID'] = getUserInfo('Usr_id');
        $data['title'] = "XLPE Key Register";
        $data['qryKeyreg'] = $model->orderBy('uid', 'DESC')->findAll();
        // return view('keyreg/pdf_print', $data);
        return view('keyreg/pdf_report', $data);
    }

    function getUserForOption()
    {
        //==Using Query builder:
        $db = \Config\Database::connect();
        $builder = $db->table('tbl_accounts');
        $query = $builder->get();

        foreach ($query->getResult() as $row) {
            $options[''] = '--Select--';
            $options[$row->Usr_id] = $row->Usr_id." -- ".$row->Name;
        }
        if(!isset($options)){
            $options = "";
        }
        // dd($options);

        return $options;
    }

}