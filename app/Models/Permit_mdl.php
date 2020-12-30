<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class Permit_mdl extends Model
{
    protected $table = 'tbl_permits';
    protected $primaryKey = 'uid';
    protected $allowedFields = [
        'Type','Date','Title','Descr','Issuer','Receiver','Status'
    ];

    protected $returnType     = 'App\Entities\Permit_ent';

    protected $useTimestamps = true;
    protected $createdField  = 'Created_at';
    protected $updatedField  = 'Modified_at';

    protected $validationRules    = [
        // 'name'  => 'required|min_length[3]',
    ];

    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $beforeInsert = [];

}


?>