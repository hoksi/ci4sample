<?php
namespace App\Controllers\Response\Api;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => 'API Response Trait',
        'location' => 'response',
        'menu' => 'api',
    ];

    public function index()
    {
        return view('response/api/home', $this->menuInfo);
    }
}