<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Blog extends BaseController
{
    public function index(): void
    {
        echo '<h2>A list of blog posts</h2>';
    }

    public function createNew(): string
    {
        return view('blog_form');
    }

    public function saveBlog(): void
    {
        echo '<pre>';
            print_r($_POST);
        echo '</pre>';
    }
}
