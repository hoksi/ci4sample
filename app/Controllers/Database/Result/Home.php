<?php
namespace App\Controllers\Database\Result;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '쿼리 결과',
        'location' => 'database',
        'menu' => 'result',
    ];

    public function index()
    {
        return view('database/result/home', $this->menuInfo);
    }
}