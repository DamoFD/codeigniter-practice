<?php

namespace App\Controllers;

use App\Models\BlogModel;
use Codeigniter\Http\RedirectResponse;

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

    public function post(int $id): string
    {
        $model = new BlogModel();
        $post = $model->find($id);
        if ($post) {
            $data = [
                'meta_title' => $post['post_title'],
                'title' => $post['post_title'],
                'post' => $post,
            ];
        } else {
            $data = [
                'meta_title' => 'Post Not Found',
                'title' => 'Post Not Found',
                'content' => 'Post Not Found',
            ];
        }

        return view('single_post', $data);
    }

    public function new(): string
    {
        $data = [
            'meta_title' => 'New Post',
            'title' => 'Create new post',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new BlogModel();
            $model->save($_POST);
        }
        return view('new_post', $data);
    }

    public function delete($id): string | RedirectResponse
    {
        $model = new BlogModel();
        $post = $model->find($id);
        if ($post) {
            $model->delete($id);
            return redirect()->to('/blog');
        }
        return redirect()->back();
    }
}
