<?php
namespace App\Controllers\Tutorial\Page;

use App\Controllers\BaseController;

/**
 * Tutorial Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '정적 페이지',
        'location' => 'tutorial',
        'menu' => 'page',
    ];

    public function index()
    {
        return view('tutorial/page/home', $this->menuInfo);
    }
    
}