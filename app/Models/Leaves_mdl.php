<?php 
namespace App\Models;

use CodeIgniter\Model;
// use CodeIgniter\Database\ConnectionInterface;
 
class Leaves_mdl extends Model
{
    protected $table = 'tbl_leaves';
    protected $primaryKey = 'uid';
    protected $allowedFields = ['Emp_id', 'From_dt','Until_dt','Type','Notes'];

    function getData($uid = false)
    {
        if($uid == false)
        {
            $qry = $this->findAll();
        }
        else
        {
            $qry = $this->where(['uid' => $uid])->first();
        }

        return $qry;
    }
}


?>