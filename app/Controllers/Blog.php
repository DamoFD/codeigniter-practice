<?php

namespace App\Controllers;

class Blog extends BaseController
{
    public function index(): string
    {
        $data = [
            'meta_title' => 'Codeigniter 4 Blog',
            'title' => 'This is a Blog Page',
        ];

        $posts = ['Title 1', 'Title 2', 'Title 3'];
        $data['posts'] = $posts;

        return view('blog', $data);
    }

    public function post(): string
    {
        $data = [
            'meta_title' => 'Codeigniter 4 Post Page',
            'title' => 'This is an awesome blog',
        ];

        return view('single_post', $data);
    }

    public function new(): string
    {
        $data = [
            'meta_title' => 'New Post',
            'title' => 'Create new post',
        ];
        return view('new_post', $data);
    }
}
