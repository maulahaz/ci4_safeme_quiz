<?php namespace App\Controllers;

use App\Models\Commons_mdl;

class Xboq extends BaseController
{
    protected $commonsModel;
    protected $title;

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

        $data['title'] = $this->title;
        $data['dtQuizMenu'] = $dtQuizMenu;
        $data['headline'] = 'Quiz';
        return view('xboq/v_menu', $data);
    }

    function quiz($area)
    {
        // $sqlRandomQuiz = '
        //     SELECT * 
        //     FROM tbl_quiz_quest qz
        //     JOIN tbl_quiz_quest_opt opt ON opt.Quest_id = qz.Quest_id
        // ';
        // $dtQuiz = $this->commonsModel->_customQuery($sqlRandomQuiz);
        // echo '<pre>';
        // print_r($dtQuiz->getResult());
        // echo '</pre>';die();

        $sqlRandomQuiz = '
            SELECT * 
            FROM tbl_quiz_quest AS t1 
            JOIN (
                SELECT Quest_id 
                FROM tbl_quiz_quest 
                ORDER BY RAND() 
                LIMIT 10
            ) as t2 ON t1.Quest_id=t2.Quest_id
        ';
        // WHERE Category = "'.$area.'"
        $dtQuiz = $this->commonsModel->_customQuery($sqlRandomQuiz);
        // echo '<pre>';
        // print_r($dtQuiz->getResult());
        // echo '</pre>';die();

        foreach ($dtQuiz->getResult() as $row) {
            $data['q'][] = $row->Quest_title;
            $sqlOpt = '
                SELECT * 
                FROM tbl_quiz_quest_opt
                WHERE Quest_id = '.$row->Quest_id.'
            ';
            $dtOpt = $this->commonsModel->_customQuery($sqlOpt);
            foreach ($dtOpt->getResult() as $rowOpt) {
                $data['opt'][] = $rowOpt->Opt_title;
            }
        }


        echo '<pre>';
        // print_r($data['q']);
        // echo '--';
        print_r($data['opt']);
        echo '</pre>';
        echo $this->commonsModel->_lastQuery();
        die();
        

        $data['title'] = $this->title;
        $data['dtQuiz'] = $dtQuiz;
        $data['headline'] = 'Quiz';
        return view('xboq/v_quiz', $data);
    }

    function menu(){
        $data['title'] = "Belajar CI4 Mobile version";
        $data['pageTitle'] = "Xboq in Mobile version";
        $data['view_file'] = "xboq/v_content";
        $data['js_file'] = "xboq/js_xboq";
        return view('template/v_mobileapp', $data);
    }

    function list(){
        $data['title'] = "Belajar CI4 Mobile version";
        $data['pageTitle'] = "Xboq in Mobile version";
        $data['view_file'] = "xboq/v_list";
        // $data['js_file'] = "xboq/js_xboq";
        return view('template/v_mobileapp', $data);
    }

}
