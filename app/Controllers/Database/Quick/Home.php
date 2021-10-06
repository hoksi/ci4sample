<?php
namespace App\Controllers\Database\Quick;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '데이터베이스 빠른 시작',
        'location' => 'database',
        'menu' => 'quick',
    ];

    public function index()
    {
        return view('database/quick/home', $this->menuInfo);
    }
}