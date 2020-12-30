<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Commons_mdl;

class Commons extends BaseController
{
    private $title = "SmartXL Quiz - SmartXL Apps by MHz";

    public function index()
	{
        return redirect()->to('test2');
    }

    function test2()
    {
        $commonsModel = new Commons_mdl();

        $dtQuiz = $commonsModel->_getData('tbl_quiz_quest',['Category'=>'Area-2']);
        echo '<pre>';
        print_r($dtQuiz->getResult());
        echo '</pre>';
        $r = $commonsModel->_lastQuery();echo($r);
        die();
    }    

    function test1()
    {
        $commonsModel = new Commons_mdl();

        $sql = 'SELECT Category FROM tbl_quiz_quest';
        $dtQuiz = $commonsModel->_customQuery($sql);
        echo '<pre>';
        print_r($dtQuiz->getResult());
        echo '</pre>';die();
    }

}