<?php
namespace App\Controllers\Library\Curl;

use App\Controllers\BaseController;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends BaseController
{
    protected $menuInfo = [
        'title' => 'CURLRequest',
        'location' => 'library',
        'menu' => 'curl',
    ];

    public function index()
    {
        // CURLRequest 로드
        $this->menuInfo['client'] = \Config\Services::curlrequest();

        return view('library/curl/home', $this->menuInfo);
    }
}