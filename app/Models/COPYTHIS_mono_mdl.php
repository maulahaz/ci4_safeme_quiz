<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class Modelname_mdl extends Model
{
    protected $table = 'tbl_keyregs';
    protected $primaryKey = 'uid';
    protected $allowedFields = ['Keyreg_type', 'Reason','Taken_dtm','Taken_by', 'Return_dtm', 'Return_by', 'Notes'];

    function getKeyreg($uid = false)
    {
        if($uid == false){
            $qry = $this->findAll();
        }else{
            $qry = $this->where(['uid' => $uid])->first();
        }

        return $qry;
    }
}


?>

<!-- 
    Source: https://xpertphp.com/codeigniter-4-crud-create-read-update-delete-tutorial-for-beginners/ 

    https://www.tutsmake.com/codeigniter-4-first-crud-example-tutorial/
        
-->