<?php
namespace App\Controllers\Response\Parser;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '뷰 파서(View Parser)',
        'location' => 'response',
        'menu' => 'parser',
    ];

    public function index()
    {
        return view('response/parser/home', $this->menuInfo);
    }
}