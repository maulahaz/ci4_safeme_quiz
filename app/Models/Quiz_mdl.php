<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class Quiz_mdl extends Model
{
    protected $table = 'tbl_quiz_quest';
    protected $primaryKey = 'Quest_id';
    protected $allowedFields = ['Category', 'Quiz_level','Exam_id','Type', 'Question', 'Answer', 'Answer_opt','isActive','Created_by','Created_dtm'];

    function getData($uid = false, $orderBy = false)
    {
        if($uid == false){
            if($orderBy){ $this->orderBy($orderBy); }
            $qry = $this->findAll();
        }else{
            $qry = $this->where(['Quest_id' => $uid])->first();
        }
        return $qry;
    }

    function getCustomData($where, $orderBy = false)
    {
        if($orderBy){ $this->orderBy($orderBy); }
        $qry = $this->where($where)->first();
        return $qry;
    }
}


?>