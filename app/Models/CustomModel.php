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

    public function all(): array
    {
        //"SELECT * FROM posts"

        return $this->db->table('posts')->get()->getResult();
    }

    public function where(): array
    {
        //"SELECT * FROM posts"

        return $this->db->table('posts')
            ->where(['post_id >' => 3])
            ->where(['post_id <' => 6])
            ->orderBy('post_id', 'DESC')
            ->get()
            ->getResult();
    }

    public function join(): array
    {
        return $this->db->table('posts')
            ->where('post_id >', 3)
            ->where('post_id <', 6)
            ->join('users', 'posts.post_author = users.user_id')
            ->get()
            ->getResult();
    }

    public function like(): array
    {
        return $this->db->table('posts')
            ->like('post_title', 'te', 'both')
            ->join('users', 'posts.post_author = users.user_id')
            ->get()
            ->getResult();
    }

    public function grouping(): array
    {
        // SELECT * FROM posts WHERE (post_id = 25 AND post_date < '1990-01-01 00:00:00') OR post_author = 10;
        return $this->db->table('posts')
            ->groupStart()
            ->where(['post_id' => '3', 'post_created_at <' => '2024-01-01 00:00:00'])
            ->groupEnd()
            ->orWhere('post_author', 1)
            ->join('users', 'posts.post_author = users.user_id')
            ->get()
            ->getResult();
    }

    public function wherein(): array
    {
        // SELECT * FROM posts WHERE (post_id = 25 AND post_date < '1990-01-01 00:00:00') OR post_author = 10;
        $emails = ['test@test.com'];
        return $this->db->table('posts')
            ->groupStart()
            ->where(['post_id' => '3', 'post_created_at <' => '2024-01-01 00:00:00'])
            ->groupEnd()
            ->orWhereIn('email', $emails)
            ->join('users', 'posts.post_author = users.user_id')
            ->get()
            ->getResult();
    }

    public function getPosts(): array
    {
        $builder = $this->db->table('posts');
        $builder->join('users', 'posts.post_author = users.user_id');
        $posts = $builder->get()->getResult();
        return $posts;
    }
}
