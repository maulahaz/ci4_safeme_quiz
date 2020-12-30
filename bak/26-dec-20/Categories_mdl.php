<?php namespace App\Models;

use CodeIgniter\Model;

class Categories_mdl extends Model
{
    protected $table      = 'tbl_categories';
	protected $primaryKey = 'uid';

	protected $returnType     = 'App\Entities\Categories_ent';

	protected $allowedFields = ['Name', 'Slug', 'Parent_id'];

	protected $useTimestamps = true;
	protected $createdField  = 'Created_at';
	protected $updatedField  = 'Updated_at';

	protected $validationRules    = [
		'Name'	=> 'required|min_length[3]|is_unique[tbl_categories.Name]',
	];

	protected $validationMessages = [
		'Name'        => [
            'is_unique' => 'Sorry. Category name has already been taken. Please choose another.'
        ]
	];
	protected $skipValidation     = false;

	// protected $beforeInsert = ['generateSlug'];

	protected function generateSlug(array $data)
	{
		$slug = strtolower(url_title($data['data']['name']));
		$name = trim($data['data']['name']);

		$category = $this->where('Name', $name)->orderBy('uid', 'DESC')->first();
		if ($category) {
			$slugs = explode('-', $category->Slug);
			$slugNumber = !(empty($slugs[1])) ? ((int)$slugs[1] + 1) : 1;
			$slug = $slug. '-' .$slugNumber;
		}

		$data['data']['slug'] = $slug;

		return $data;
	}

	public function getParentOptions($exceptCategoryId = null)
	{
		$categories = [];

		$categoryModel = $this;
		if ($exceptCategoryId) {
			$categoryModel->where('id !=', $exceptCategoryId);
		}

        if ($results = $categoryModel->findAll()) {
            foreach ($results as $result) {
                $categories[] = [
                    'id' => $result->id,
                    'name' => $result->name,
                    'slug' => $result->slug,
                    'parent_id' => $result->parent_id,
                    'created_at' => $result->created_at,
                    'updated_at' => $result->updated_at,
                ];
            }
		}

		return $categories;
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

