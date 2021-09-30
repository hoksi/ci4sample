<?php
namespace App\Controllers\Response\Http;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => 'HTTP 응답(Responses)',
        'location' => 'response',
        'menu' => 'http',
    ];

    public function index()
    {
        return view('response/http/home', $this->menuInfo);
    }
}