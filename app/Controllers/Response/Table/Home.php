<?php
namespace App\Controllers\Response\Table;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => 'HTML Table 클래스',
        'location' => 'response',
        'menu' => 'table',
    ];

    public function index()
    {
        return view('response/table/home', $this->menuInfo);
    }
}