<?php
namespace App\Controllers\Model\Cimodel;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => 'Codeigniter 모델',
        'location' => 'model',
        'menu' => 'cimodel',
    ];

    public function index()
    {
        return view('model/cimodel/home', $this->menuInfo);
    }
}