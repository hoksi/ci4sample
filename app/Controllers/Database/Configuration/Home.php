<?php
namespace App\Controllers\Database\Configuration;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => '데이터베이스 구성',
        'location' => 'database',
        'menu' => 'configuration',
    ];

    public function index()
    {
        return view('database/configuration/home', $this->menuInfo);
    }

    public function env()
    {
        echo '<h2>샘플 프로젝트 .env</h2>';
        echo '<pre>';
        echo file_get_contents(APPPATH . '/../.env');
        echo '</pre>';
    }
}