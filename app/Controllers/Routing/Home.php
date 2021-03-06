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
    protected $menuInfo = [
        'title' => 'Routing',
        'location' => 'controller',
        'menu' => 'routing',
    ];
    
    public function index()
    {
        return view('routing/home', $this->menuInfo);
    }
}