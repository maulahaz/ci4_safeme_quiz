<?php namespace App\Models;
// use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class Accounts_mdl extends Model
{
    protected $table = 'tbl_accounts';
    protected $primaryKey = 'uid';
    protected $allowedFields = [
        'Usr_id','Usr_pwd','Name','Nickname','Birth_dt','Position','Role_id','isActive','Email','Photo','Phone1','Phone2','Phone_ext','Address'
    ];

    function getData($uid = false)
    {
        if($uid == false){
            $qry = $this->findAll();
        }else{
            $qry = $this->where(['uid' => $uid])->first();
        }

        return $qry;
    }

    function getWhere($where)
    {
        $qry = $this->where($where)->first();
        return $qry;
    }
}


?>