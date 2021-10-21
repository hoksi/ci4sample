<?php
namespace App\Controllers\Library\Validation;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '폼 검증',
        'location' => 'library',
        'menu' => 'validation',
    ];

    public function index()
    {
        return view('library/validation/home', $this->menuInfo);
    }
}