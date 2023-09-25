<?php

namespace App\Controllers;

use App\Models\CustomModel;

class Posts extends BaseController
{
    public function index(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->all();
        dd($result);
    }

    public function where(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->where();
        dd($result);
    }

    public function join(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->join();
        dd($result);
    }

    public function like(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->like();
        dd($result);
    }

    public function grouping(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->like();
        dd($result);
    }

    public function wherein(): string
    {
        $db = db_connect();
        $model = new CustomModel($db);
        $result = $model->wherein();
        dd($result);
    }
}
