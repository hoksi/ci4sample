<?php
namespace App\Controllers\Model\Event;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '모델 이벤트',
        'location' => 'model',
        'menu' => 'event',
    ];

    public function index()
    {
        return view('model/event/home', $this->menuInfo);
    }
}