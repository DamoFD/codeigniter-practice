<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function index(): string
    {
        helper(['form']);

        $data = [];
        $data['categories'] = [
            'Student',
            'Teacher',
            'Principal',
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $rules = [
                'email' => 'required|valid_email',
            ];

            if($this->validate($rules)) {
                //
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('form', $data);
    }
}
