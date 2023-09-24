<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index(): string
    {
        return view('shop');
    }

    public function product($type = 'laptop'): void
    {
        echo '<h2>This is a product: ' . $type . '</h2>';
        //return view('product');
    }
}
