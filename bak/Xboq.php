<?php namespace App\Controllers;

use App\Models\Xboq_mdl;

class Xboq extends BaseController
{
    protected $quizModel;
    protected $title;

    public function __construct()
    {
        // Models:
        $this->quizModel = new Xboq_mdl();

        // Menu:
        // $this->data['currentMenu'] = 'Catalogue';
        // $this->data['currentSubMenu'] = 'Categories';

        // General:
        $this->title = 'SmartXL apps by MHz';
    }

	public function index()
	{
        // $dtQuiz = $this->quizModel->findAll();
        // dd($dtQuiz);

        $sql = 'SELECT * FROM tbl_quiz_quest';
        $dtQuiz = $this->quizModel->customQuery($sql);
        // $dtQuiz = $db->query($sql);
        // dd($dtQuiz);
        echo '<pre>';
        print_r($dtQuiz->getResult());
        echo '</pre>';die();

        $data['title'] = $this->title;
        $data['headline'] = 'Quiz Menu';
        return view('admin/categories/v_manage', $data);
    }

    function mobile_menu(){
        $data['title'] = "Belajar CI4 Mobile version";
        $data['pageTitle'] = "Xboq in Mobile version";
        $data['view_file'] = "xboq/v_content";
        $data['js_file'] = "xboq/js_xboq";
        return view('template/v_mobileapp', $data);
    }

    function mobile_list(){
        $data['title'] = "Belajar CI4 Mobile version";
        $data['pageTitle'] = "Xboq in Mobile version";
        $data['view_file'] = "xboq/v_list";
        // $data['js_file'] = "xboq/js_xboq";
        return view('template/v_mobileapp', $data);
    }

    function saranCari(){
        $term = $this->input->post('term',TRUE);
        // if (strlen($term) < 2) break;
        $rows = $this->autocomplete_model->GetAutocomplete(array('keyword' => $term));
        $keywords = array();
        foreach ($rows as $row)
        array_push($keywords, $row->keyword);
        echo json_encode($keywords);
    }

    //in model:
    // class Autocomplete_Model extends CI_Model
    function GetAutocomplete($options = array()){
        $this->db->select('keyword');
        $this->db->like('keyword', $options['keyword'], 'after');
        
        $query = $this->db->get('autocomplete');
        return $query->result();
    }

}

// Codeigniter 4:
// Models:
// http://forum.codeigniter.com/thread-77629.html

// =
// - in Model
//  $db = $this->db;
//  - not in Model
//  $db = db_connect();

To be delete ========
<?php namespace App\Models;

use CodeIgniter\Model;

class Xboq_mdl extends Model
{
    protected $table      = 'tbl_quiz_quest';
	protected $primaryKey = 'Quest_id';

	protected $returnType     = 'App\Entities\Xboq_ent';

	protected $allowedFields = [
        'Category','Quiz_level','Exam_id','Type','Quest_title','The_answer','Anwer_opt','isActive','Updated_by'
    ];

	protected $useTimestamps = true;
	protected $createdField  = 'Created_at';
	protected $updatedField  = 'Updated_at';

	protected $validationRules    = [
		'Exam_id' => 'required',
		'Type' => 'required',
		'Quiz_title' => 'required',
		'The_answer' => 'required',
	];

	protected $validationMessages = [];
    protected $skipValidation     = false;

    function customQuery($qslQuery)
    {
        $db = $this->db;
        $query = $db->query($qslQuery); 
        return $query;
    }
    
    public const ATTRIBUTE_TYPES = [
		''         => '-- Please Choose --',
		'select'   => 'Select',
		'text'     => 'Text',
		'textarea' => 'Textarea',
		'price'    => 'Price',
		'boolean'  => 'Boolean',
		'datetime' => 'Datetime',
		'date'     => 'Date',
	];

	public const IS_REQUIRED_OPTIONS = [
		'' => '-- Please Choose --',
		0  => 'No',
		1  => 'Yes',
	];

	public const IS_UNIQUE_OPTIONS = [
		'' => '-- Please Choose --',
		0  => 'No',
		1  => 'Yes',
	];

	public const VALIDATIONS = [
		''        => '-- Please Choose --',
		'number'  => 'Number',
		'decimal' => 'Decimal',
		'email'   => 'Email',
		'url'     => 'URL',
	];

	public const IS_CONFIGURABLE_OPTIONS = [
		'' => '-- Please Choose --',
		0  => 'No',
		1  => 'Yes',
	];

	public const IS_FILTERABLE_OPTIONS = [
		'' => '-- Please Choose --',
		0  => 'No',
		1  => 'Yes',
	];
}

== batas
<?php 
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Categories_mdl;

class Categories extends BaseController
{
    protected $categModel;
    protected $perPage  = 5;

    public function __construct()
    {
        $this->categModel = new Categories_mdl();
        $this->data['currentMenu'] = 'Catalogue';
        $this->data['currentSubMenu'] = 'Categories';
    }

    public function index($categID = null)
	{
        if ($categID) {
            $category = $this->categModel->find($categID);
            if (!$category) {
                // die('none');
                $this->session->setFlashdata('errors', 'Invalid category');
                return redirect()->to('/admin/categories');
            }
            // dd($category->Name);
            $this->data['categID'] = $categID;
            $this->data['category'] = $category;
        }
        
        // $this->data['categories'] = $this->categModel->findAll();
        $this->getCategories();
        // $this->getParentOptions($categID);

        $this->data['title'] = 'SmartXL apps by MHz';
        $this->data['headline'] = 'Categories';
        return view('admin/categories/v_manage', $this->data);
    }

    private function getCategories()
    {
        // $this->data['categories'] = $this->categModel->findAll();
        $this->data['categories'] = $this->categModel->paginate($this->perPage);
        $this->data['pager'] = $this->categModel->pager;
    }

    public function store()
    {      
        // $post = $this->request->getVar();
        // dd($post);
        $params = [
            'Name' => $this->request->getVar('name'),
        ];

        if ($this->categModel->save($params)) {
            // die('saved');
            $this->session->setFlashdata('success', 'Category has been saved.');
            return redirect()->to(base_url('/admin/categories'));
        } else {
            // die('un-saved');
            $this->getCategories();
            $this->data['title'] = 'SmartXL apps by MHz';
            $this->data['headline'] = 'Categories';
            $this->data['errors'] = $this->categModel->errors();
            return view('admin/categories/v_manage', $this->data);
        }
    }

    public function update($id)
    {
        // $segment = $this->request->uri->getSegment(3);
        // dd($segment);
        $params = [
			'uid' => $id,
            'Name' => $this->request->getVar('name'),
            // 'parent_id' => $this->request->getVar('parent_id'),
        ];
        
        // $this->data['selectedParentId'] = $params['parent_id'];

		if ($this->categModel->save($params)) {
			$this->session->setFlashdata('success', 'Category has been updated!');
			return redirect()->to(base_url('/admin/categories'));
		} else {
            $this->getCategories();
            $this->data['categID'] = $this->request->uri->getSegment(3);
            $this->data['title'] = 'SmartXL apps by MHz';
            $this->data['headline'] = 'Categories';
            $this->data['category'] = 'Categories';
            $this->data['errors'] = $this->categModel->errors();
            return view('admin/categories/v_manage', $this->data);
            // $errors = array($this->categModel->errors());
            // $this->session->setFlashdata('errors', $errors);
            // return redirect()->to(base_url('/admin/categories/'.$id));
		}
    }

    public function destroy($uid)
    {
        $category = $this->categModel->find($uid);
		if (!$category) {
			$this->session->setFlashdata('errors', 'Invalid category');
			return redirect()->to(base_url('/admin/categories'));
		}

		if ($this->categModel->delete($category->uid)) {
			$this->session->setFlashdata('success', 'The category has been deleted');
			return redirect()->to(base_url('/admin/categories'));
		} else {
			$this->session->setFlashdata('errors', 'Could not delete the category');
			return redirect()->to(base_url('/admin/categories'));
		}
    }

}

== batas
<?php namespace App\Entities;

use CodeIgniter\Entity;

class Xboq_ent extends Entity
{
    protected $dates = ['Created_at', 'Updated_at'];
}

== batas

