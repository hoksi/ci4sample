<?php

namespace App\Controllers\Sample;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
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

    public function view(...$params)
    {
        $viewFile = realpath(sprintf('%s/%s.php', APPPATH, implode('/', $params)));

        if ($viewFile && is_file($viewFile)) {
            return view('sample/view', ['source' => file_get_contents($viewFile)]);
        }

        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }
}