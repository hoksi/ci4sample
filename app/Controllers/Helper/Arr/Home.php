<?php
namespace App\Controllers\Helper\Arr;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => 'Array 헬퍼',
        'location' => 'helper',
        'menu' => 'array',
    ];

    public function index()
    {
        return view('helper/arr/home', $this->menuInfo);
    }
}