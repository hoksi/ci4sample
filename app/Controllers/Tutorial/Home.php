<?php
namespace App\Controllers\Tutorial;

/**
 * Tutorial Home
 *
 * @author hoksi
 */
class Home extends \App\Controllers\BaseController
{
    public function index()
    {
        return view('tutorial/home', ['title' => 'Tutorial']);
    }
}