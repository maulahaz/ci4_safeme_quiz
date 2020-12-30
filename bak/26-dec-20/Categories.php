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

    function test()
    {
        $sql = 'SELECT * FROM tbl_quiz_quest';
        $dtQuiz = $this->categModel->_customQuery($sql);
        echo '<pre>';
        print_r($dtQuiz->getResult());
        echo '</pre>';
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
