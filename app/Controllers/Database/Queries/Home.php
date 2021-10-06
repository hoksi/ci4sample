<?php
namespace App\Controllers\Database\Queries;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '쿼리',
        'location' => 'database',
        'menu' => 'queries',
    ];

    public function index()
    {
        return view('database/queries/home', $this->menuInfo);
    }
}