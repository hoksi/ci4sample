<?php
namespace App\Controllers\Database\Helper;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '쿼리 헬퍼',
        'location' => 'database',
        'menu' => 'helper',
    ];

    public function index()
    {
        return view('database/helper/home', $this->menuInfo);
    }
}