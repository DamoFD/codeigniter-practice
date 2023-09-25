<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RedirectResponse;

class Form extends BaseController
{
    public function index(): string | RedirectResponse
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
                'email' => [
                    'rules' => 'required|valid_email',
                    'label' => 'Email address',
                    'errors' => [
                        'required' => 'Hey, Email address is a required field',
                        'vaild_email' => 'Please add a valid email.',
                    ],
                ],
                'password' => 'required|min_length[8]',
                'category' => 'in_list[Student, Teacher]',
                'date' => [
                    'rules' => 'required|check_date',
                    'label' => 'Date',
                    'errors' => [
                        'check_date' => 'You cannot add a date before today.',
                    ]
                ],
            ];

            if($this->validate($rules)) {
                return redirect()->to('/form/success');
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('form', $data);
    }

    public function success(): string
    {
        return 'Hey, you have passed the validation. Congrats!';
    }
}
