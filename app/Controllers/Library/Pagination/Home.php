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
        'location' => 'library',
        'menu' => 'pagination',
    ];

    public function index()
    {
        return view('library/pagination/home', $this->menuInfo);
    }
}