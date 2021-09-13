<?php
namespace App\Controllers\Tutorial;

use CodeIgniter\Controller;

/**
 * Tutorial Step1
 *
 * @author hoksi
 */
class Step1 extends Controller
{
    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        // ...
    }
}