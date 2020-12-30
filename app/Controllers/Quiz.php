<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Quiz_mdl;
use App\Models\Commons_mdl;

class Quiz extends BaseController
{
    protected $commonsModel;
    protected $title = "SafeMe - SmartXL Apps by MHz";

    public function __construct()
    {
        // Models:
        $this->commonsModel = new Commons_mdl();

        // Menu:
        // $this->data['currentMenu'] = 'Catalogue';
        // $this->data['currentSubMenu'] = 'Categories';

        // General:
        $this->title = 'SmartXL apps by MHz';
    }

    public function index()
    {
        $sql = 'SELECT Category FROM tbl_quiz_quest GROUP BY Category ORDER BY Category ASC';
        $dtQuizMenu = $this->commonsModel->_customQuery($sql);
        // echo '<pre>';
        // print_r($dtQuizMenu->getResult());
        // echo '</pre>';die();
        
        $data['dtQuizMenu'] = $dtQuizMenu;
        $data['loginID'] = getUserInfo('Usr_id');
        $data['title'] = $this->title;
        $data['pageTitle'] = "SmartXL Quiz";
        // $data['flashMsg'] = session()->getFlashdata('flashMsg');
        // $data['jsFile'] = "quiz/js_quiz";
        return view('quiz/v_student_menu', $data);        
    }

    function quiz_area($area = null, $totQuestion = 3)
    {
        $sqlRandomQuiz = '
            SELECT * 
            FROM tbl_quiz_quest AS t1 
            JOIN (
                SELECT Quest_id 
                FROM tbl_quiz_quest 
                ORDER BY RAND() 
                LIMIT '.$totQuestion.'
            ) as t2 ON t1.Quest_id=t2.Quest_id
            
        ';
        //WHERE Category = "'.$area.'"
        $dtQuiz = $this->commonsModel->_customQuery($sqlRandomQuiz);

        $sqlOpt = '
            SELECT * 
            FROM tbl_quiz_answer_opt
        ';
        $dtOpt = $this->commonsModel->_getData('tbl_quiz_answer_opt',null,'rand()');
        // echo '<pre>';
        // print_r($dtOpt->getResult());
        // echo '</pre>';
        // echo $this->commonsModel->_lastQuery();
        // die();
        
        $data['loginID'] = getUserInfo('Usr_id');
        $data['title'] = $this->title;
        $data['dtQuiz'] = $dtQuiz;
        $data['dtOpt'] = $dtOpt;
        $data['pageTitle'] = "Quiz Area ".$area;
        return view('quiz/v_student_quiz', $data); 
    }

    function result()
    {
        // $p = $this->request->getPost();
        // echo "<pre>";
        // print_r ($p);
        // echo "</pre>";
        // die();
        $score = 0;
        $postedQuestionID = $this->request->getPost('question_id');

        foreach ($postedQuestionID as $qid) {
            if($this->request->getPost('answer_qid_'.$qid) == $this->_getCorrectAnswer($qid)){
                $score ++;
            }
        }

        echo $score;
        $data['loginID'] = getUserInfo('Usr_id');
        $data['title'] = $this->title;
        $data['score'] = $score;
        $data['pageTitle'] = "Quiz Reseult";
        return view('quiz/v_student_quiz_result', $data); 
    }

    function _getCorrectAnswer($questionID)
    {

        $correcrAnswer = $this->commonsModel->_getData('tbl_quiz_answer_opt',['Quest_id'=>$questionID,'isCorrect'=>1])->getRow()->Opt_title;
        return $correcrAnswer;
        // echo "<pre>";
        // print_r ($correcrAnswer);
        // echo "</pre>";
    }

    function _getCorrectAnswerForMultiAnswer($questionID)
    {

        $correcrAnswer = $this->commonsModel->_getData('tbl_quiz_answer_opt',['Quest_id'=>$questionID,'isCorrect'=>1]);

        foreach ($correcrAnswer->getResult() as $row) {
            $data[] = $row->Opt_title; 
        }
        return $data;
        // echo "<pre>";
        // print_r ($data);
        // echo "</pre>";
    }

    function dashboard()
    {      
        $model = new Quiz_mdl();

        $data['loginID'] = getUserInfo('Usr_id');

        $data['title'] = $this->title;
        $data['pageTitle'] = "SmartXL Quiz";
        $data['flashMsg'] = session()->getFlashdata('flashMsg');
        return view('quiz/v_dashboard', $data);
    }

    function manage()
    {      
        $model = new Quiz_mdl();

        $data['loginID'] = getUserInfo('Usr_id');

        $data['qryData'] = $model->orderBy('Quest_id', 'DESC')->findAll();
        $data['title'] = $this->title;
        $data['pageTitle'] = "SmartXL Quiz";
        $data['flashMsg'] = session()->getFlashdata('flashMsg');
        $data['jsFile'] = "quiz/js_quiz";
        return view('quiz/v_manage', $data);
        // $data['viewFile'] = "quiz/v_list_1";
        // return view('template/v_admin', $data);
    }

    function create($updateID = null)
    {
        $validation = \Config\Services::validation();
        $model = new Quiz_mdl();

        $updateID = $this->request->uri->getSegment(3);
        $btnSave = $this->request->getVar('btn_save');
        if($btnSave == 'Save'){
            // $this->_createValidation();
            $valid = $this->validate([
                'area'  => 'required',
                'level' => 'required',
                'question'=> 'required',
                'answer'=> 'required'
            ]);

            if ($valid){
                // die('ok');
                $data['Category'] = $this->request->getVar('area');
                $data['Quiz_level'] = $this->request->getVar('level');
                $data['Question'] = $this->request->getVar('question');
                $data['Answer'] = $this->request->getVar('answer');
                $data['isActive'] = $this->request->getVar('is_active');
                //if $updateID is NOT NULL it's mean UPDATE DATA
                if($updateID){
                    $model->update(['Quiz_id' => $updateID], $data);
                    session()->setFlashdata('success', 'Data updated.');
                } 
                //if $updateID is NULL it's mean CREATE NEW DATA -- INSERT Method not SAVE
                else{
                    $model->save($data);
                    session()->setFlashdata('success', 'New data created.');
                }
                
                return redirect()->to(base_url('/quiz/manage'));
            }else{
                $data['errors'] = array($validation->listErrors());             }
        }

        if((!empty($updateID)) && ($btnSave != 'Save')){
            $data['editData']  = $model->getData($updateID);
            // dd($data);
            // $data = $this->fetchDataFromDB($updateID);
        }

        $data['loginID'] = getUserInfo('Usr_id');
        $data['updateID'] = $updateID;
        $data['title'] = $this->title;
        $data['pageTitle'] = "SmartXL Quiz";
        // $data['errorMsg'] = session()->getFlashdata('errorMsg');
        // $data['flashMsg'] = session()->getFlashdata('flashMsg');
        $data['jsFile'] = "quiz/js_quiz";
        return view('quiz/v_create', $data);
    }

    function _createValidation()
    {
        $valid = $this->validate([
            'area'  => 'required',
            'level' => 'required',
            'question'=> 'required',
            'answer'=> 'required'
        ]);

        // $valid_errors = [
        //     'area' => [
        //         'required'    => 'Area category must be filled',
        //     ],
        //     'question' => [
        //         'required'    => 'You must enter Question.',
        //     ],
        // ];
    }

    function fetchDataFromDB($updateID = null)
    {
        $model = new Quiz_mdl();

        $qryData = $model->getData($updateID);
        // dd($qryData);
        // foreach ($qryData as $key => $value) {
        //     $key['area'] = $value['Category'];
        //     $key['level'] = $value['Quiz_level'];
        //     $key['question'] = $value['Question'];
        //     $key['answer'] = $value['Answer'];
        //     $key['is_active'] = $value['isActive'];
        // }
        // dd($key);
        foreach ($qryData as $row) {
            $data['area'] = $row['Category'];
            $data['level'] = $row['Quiz_level'];
            $data['question'] = $row['Question'];
            $data['answer'] = $row['Answer'];
            $data['is_active'] = $row['isActive'];
        }
        (!isset($data)) ? $data = "" : null;
        // return $data;
        dd($data);
    }

    function delete($updateID)
    {
        $model = new Quiz_mdl();

        $model->delete(['Quest_id' => $updateID]);

        $msg = '<div class="alert alert-primary" role="alert">Data Deleted</div>';
        session()->setFlashdata('flashMsg', $msg);
        return redirect()->to(base_url('/quiz/manage'));
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

    function apiQuestion()
    {
        $model = new Quiz_mdl();
        $response = array('isSuccess' => false, 'msg' => array(),'data' => array());

        $area = 'Area-1';
        // $area = $_POST['area'];

        $qryData = $model->getCustomData(['Category'=>$area]);
        // dd(!is_null($qryData));
        if(!is_null($qryData)){
            $response['isSuccess'] = true;
            $response['msg'] = 'Data is valid';
            $response['data'] = $qryData;
        } else{
            $response['isSuccess'] = false;
            $response['msg'] = 'Data is not valid';
        }

        echo json_encode($response);
    }

}