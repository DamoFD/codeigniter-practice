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

        echo view('header', $data);
        return view('blog');
        echo view('footer');
    }

    public function post(): string
    {
        $data = [
            'meta_title' => 'Codeigniter 4 Post Page',
            'title' => 'This is an awesome blog',
        ];
        echo view('header', $data);
        return view('single_post');
        echo view('footer');
    }
}
