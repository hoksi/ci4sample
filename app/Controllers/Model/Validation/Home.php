<?php
namespace App\Controllers\Model\Validation;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '모델 데이터 검증',
        'location' => 'model',
        'menu' => 'validation',
    ];

    public function index()
    {
        return view('model/validation/home', $this->menuInfo);
    }
}