<?php
namespace App\Controllers\Incomming;

use App\Controllers\BaseController;

/**
 * Routing Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => 'Incomming',
        'location' => 'controller',
        'menu' => 'incomming',
    ];
    
    public function index()
    {
        return view('incomming/home', $this->menuInfo);
    }
}