<?php
namespace App\Controllers\Routing;

use App\Controllers\BaseController;

/**
 * Routing Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    public function index()
    {
        return view('routing/home', [
            'title' => 'Routing',
            'location' => 'example',
            'menu' => 'routing',
        ]);
    }
}