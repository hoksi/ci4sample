<?php
namespace App\Controllers\Response\Layout;

use App\Controllers\BaseController;


/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '뷰 레이아웃(View Layout)',
        'location' => 'response',
        'menu' => 'layout',
    ];

    public function index()
    {
        return view('response/layout/home', $this->menuInfo);
    }
}