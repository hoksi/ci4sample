<?php
namespace App\Controllers\Model\Pagination;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '모델 페이지네이션',
        'location' => 'pagination',
        'menu' => 'model',
    ];

    public function index()
    {
        return view('model/pagination/home', $this->menuInfo);
    }
}