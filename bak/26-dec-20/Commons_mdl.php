<?php namespace App\Models;
use CodeIgniter\Model;
 
class Commons_mdl extends Model
{
    public function _getData($table, $whereCondition = null, $orderBy = null)
    {
        $builder = $this->db->table($table);
        ($whereCondition) ? $builder->where($whereCondition) : null;
        ($orderBy) ? $builder->orderBy($orderBy) : null;
        $query = $builder->get();
        return $query;
    }

    public function _update($table, $whereCondition, $data)
    {
        $builder = $this->db->table($table);
        $builder->where($whereCondition);
        $builder->update($data);
    }

    public function _insert($table, $data, $isBatch = false)
    {
        $builder = $this->db->table($table);
        ($isBatch) ? $builder->insertBatch($data) : $builder->insert($data);;
    }

    public function _delete($table, $whereCondition)
    {
        $builder = $this->db->table($table);
        $builder->where($whereCondition);
        $builder->delete();
    }

    public function _customQuery($qslQuery)
    {
        $query = $this->db->query($qslQuery); 
        return $query;
    }

    public function _lastQuery()
    {
        $query = $this->db->getLastQuery();
        return $query;
    }
}

// Cara normal: SELECT * FROM Table_Name ORDER BY RAND() LIMIT 0,10;
// $sqlRandomQuiz = '
// SELECT * 
// FROM tbl_quiz_quest
// ORDER BY RAND() 
// LIMIT 0, 2  
// ';

// Pake kaya gini biar query nya cepat.
// $sqlRandomQuiz = '
//     SELECT Quest_title 
//     FROM tbl_quiz_quest AS t1 
//     JOIN (
//         SELECT Quest_id 
//         FROM tbl_quiz_quest 
//         ORDER BY RAND() 
//         LIMIT 10
//     ) as t2 ON t1.Quest_id=t2.Quest_id
// ';


?>