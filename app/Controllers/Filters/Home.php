<?php
namespace App\Controllers\Filters;

use App\Controllers\BaseController;

/**
 * Routing Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => 'Filter',
        'location' => 'controller',
        'menu' => 'filter',
    ];
    
    public function index()
    {
        return view('filters/home', $this->menuInfo);
    }
}