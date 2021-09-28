<?php
namespace App\Controllers\Controller;

use App\Controllers\BaseController;

/**
 * Tutorial Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    public function index()
    {
        return view('controller/home', [
            'title' => 'Controller',
            'location' => 'controller',
            'menu' => 'controller',
        ]);
    }
}