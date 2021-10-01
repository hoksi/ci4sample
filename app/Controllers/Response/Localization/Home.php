<?php
namespace App\Controllers\Response\Localization;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '지역화 (Localization)',
        'location' => 'response',
        'menu' => 'localization',
    ];

    public function index()
    {
        return view('response/localization/home', $this->menuInfo);
    }
}