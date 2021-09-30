<?php
namespace App\Controllers\Response\Cell;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '뷰 셀(View Cell)',
        'location' => 'response',
        'menu' => 'cell',
    ];

    public function index()
    {
        return view('response/cell/home', $this->menuInfo);
    }
}