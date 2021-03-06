<?php
namespace App\Controllers\Refactoring\Capsulation;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '์บก์ํ',
        'location' => 'refactoring',
        'menu' => 'capsulation',
    ];

    public function index()
    {
        return view('refactoring/capsulation/home', $this->menuInfo);
    }
}