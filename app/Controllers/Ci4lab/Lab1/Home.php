<?php
namespace App\Controllers\Ci4lab\Lab1;

use App\Controllers\BaseController;

/**
 * Description of Lab1
 *
 * @author hoksi
 */
class Home extends BaseController {
    protected $menuInfo = [
        'title' => '실험실1',
        'location' => 'ci4lab',
        'menu' => 'lab1',
    ];

    public function index()
    {
        return view('ci4lab/lab1/home', $this->menuInfo);
    }

}