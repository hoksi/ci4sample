<?php
namespace App\Controllers\Helper\Cookie;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => 'Cookie 헬퍼',
        'location' => 'helper',
        'menu' => 'cookie',
    ];

    public function index()
    {
        return view('helper/cookie/home', $this->menuInfo);
    }
}