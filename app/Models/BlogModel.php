<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'post_id';

    //protected $returnType = 'array';
    //protected $useSoftDeletes = 'true';

    protected $allowedFields = ['post_title', 'post_content'];

    protected $useTimestsamps = true;
    protected $createdField = 'post_created_at';
    protected $updatedField = 'post_updated_at';
    //protected $deletedField = 'deleted_at';

    //protected $validationRules = [];
    //protected $validationMessages = [];
    //protected $skipValidation = false;

    protected $beforeInsert = ['checkName'];

    public function checkName(array $data): array
    {
        $newTitle = $data['data']['post_title'] . ' Extra Features';
        $data['data']['post_title'] = $newTitle;

        return $data;
    }
}
