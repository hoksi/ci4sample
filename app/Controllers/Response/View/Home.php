<?php
namespace App\Controllers\Response\View;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '뷰(View)',
        'location' => 'response',
        'menu' => 'view',
    ];

    public function index()
    {
        return view('response/view/home', $this->menuInfo);
    }
}