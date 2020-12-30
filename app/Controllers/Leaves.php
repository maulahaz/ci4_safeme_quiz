<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Leaves_mdl;

class Leaves extends BaseController
{

    public function index()
	{
        return redirect()->to('leaves/list');
    }

    function test(){
        $data['loginID'] = 'Test';
        $data['title'] = "XLPE Key Register - SafeMe Apps";
        $data['headline'] = "Manage Leave Data";
        $data['viewFile'] = "leaves/test";
        return view('template/v_admin', $data);
    }

    function list()
    {
        // $myModel = new Leaves_mdl();

        $data['loginID'] = getUserInfo('Usr_id');

        // $data['qry'] = $myModel->orderBy('uid', 'DESC')->findAll();
        $data['title'] = "XLPE Key Register - SafeMe Apps";
        $data['headline'] = "Manage Leave Data";
        $data['flashMsg'] = session()->getFlashdata('flashMsg');
        $data['viewFile'] = "leaves/v_list_ajax";
        $data['jsFile'] = "leaves/js_leaves";
        return view('template/v_admin', $data);


        // return view('leaves/v_list_ajax1', $data);
        // return view('leaves/v_list', $data);
    }

    function ajaxRead()
    {
        if (!$this->request->isAJAX()) {
            return redirect()->to(base_url('pages/forbidden'));
        }

        $myModel = new Leaves_mdl();

        // $ajaxOutput = array('isOK' => false, 'data' => array());

        $data['qry'] = $myModel->orderBy('uid', 'DESC')->findAll();

        $ajaxOutput['xtraFile'] = view('leaves/v_table_leave', $data);

        echo json_encode($ajaxOutput);
    }

    function ajaxAction($action = null)
    {
        // if (!$this->request->isAJAX()) {
        //     return redirect()->to(base_url('pages/forbidden'));
        // }

        if($action == 'create'){
            // echo "Ajax Create";
            $ajaxOutput['xtraFile'] = view('leaves/mod_modify');
        }
        elseif ($action == 'update') {
            echo "Ajax Update";
            $ajaxOutput = "Ajax Update";
        }
        elseif ($action == 'save') {
            $ajaxOutput = "Ajax Save";
        }


        echo json_encode($ajaxOutput);
    }

    function modify()
    {
        echo '<h2>Modify Page</h2><hr>';
    }

}