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
        'location' => 'example',
        'menu' => 'routing',
    ];
    
    public function index()
    {
        return view('routing/home', $this->menuInfo);
    }
    
    public function basic()
    {
        $this->menuInfo['type'] = 'basic';
        
        return view('routing/basic', $this->menuInfo);
    }
    
    public function custom()
    {
        $this->menuInfo['type'] = 'custom';
        
        return view('routing/custom', $this->menuInfo);
    }
    
    public function closer()
    {
        $this->menuInfo['type'] = 'closer';
        
        return view('routing/closer', $this->menuInfo);
    }
}