<?php
namespace App\Controllers\Refactoring\Basic;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '기본적인 리팩터링',
        'location' => 'refactoring',
        'menu' => 'basic',
    ];

    public function index()
    {
        return view('refactoring/basic/home', $this->menuInfo);
    }
}