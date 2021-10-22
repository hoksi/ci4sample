<?php
namespace App\Controllers\Helper\Filesys;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => 'Filesystem 헬퍼',
        'location' => 'helper',
        'menu' => 'filesys',
    ];

    public function index()
    {
        return view('helper/filesys/home', $this->menuInfo);
    }
}