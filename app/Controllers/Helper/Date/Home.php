<?php
namespace App\Controllers\Helper\Date;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => 'Date 헬퍼',
        'location' => 'helper',
        'menu' => 'date',
    ];

    public function index()
    {
        return view('helper/cookie/home', $this->menuInfo);
    }
}