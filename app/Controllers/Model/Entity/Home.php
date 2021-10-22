<?php
namespace App\Controllers\Model\Entity;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => 'Entity',
        'location' => 'model',
        'menu' => 'entity',
    ];

    public function index()
    {
        return view('model/entity/home', $this->menuInfo);
    }
}