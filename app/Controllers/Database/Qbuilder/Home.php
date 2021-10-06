<?php
namespace App\Controllers\Database\Qbuilder;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '쿼리 빌더',
        'location' => 'database',
        'menu' => 'qbuilder',
    ];

    public function index()
    {
        return view('database/qbuilder/home', $this->menuInfo);
    }
}