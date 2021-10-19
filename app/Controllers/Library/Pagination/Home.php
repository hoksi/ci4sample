<?php
namespace App\Controllers\Library\Pagination;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '페이지네이션',
        'location' => 'pagination',
        'menu' => 'library',
    ];

    public function index()
    {
        return view('library/pagination/home', $this->menuInfo);
    }
}