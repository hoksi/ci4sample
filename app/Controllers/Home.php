<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('sample/sample', [
            'title' => 'ci4Sample',
            'location' => 'home',
            'menu' => '',
        ]);
    }
}
