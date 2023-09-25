<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;

class CustomModel
{
    protected object $db;

    public function __construct(ConnectionInterface &$db)
    {
        $this->db =& $db;
    }

    public function getPosts(): array
    {
        $builder = $this->db->table('posts');
        $builder->join('users', 'posts.post_author = users.user_id');
        $posts = $builder->get()->getResult();
        return $posts;
    }
}
