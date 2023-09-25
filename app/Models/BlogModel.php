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

    //protected $useTimestsamps = false;
    //protected $createdField = 'created_at';
    //protected $updatedField = 'updated_at';
    //protected $deletedField = 'deleted_at';

    //protected $validationRules = [];
    //protected $validationMessages = [];
    //protected $skipValidation = false;
}
