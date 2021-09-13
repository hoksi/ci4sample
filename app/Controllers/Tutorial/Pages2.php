<?php

namespace App\Controllers\Tutorial;

use CodeIgniter\Controller;

/**
 * Tutorial Pages2
 *
 * @author hoksi
 */
class Pages2 extends Controller
{

    public function index()
    {
        return view('welcome_message');
    }

    public function view($page = 'home')
    {
        if (!is_file(APPPATH.'/Views/tutorial/pages/'.$page.'.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        echo view('tutorial/templates/header', $data);
        echo view('tutorial/pages/'.$page, $data);
        echo view('tutorial/templates/footer', $data);
    }
}