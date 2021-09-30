<?php
namespace App\Controllers\Response\View;

use App\Controllers\BaseController;

/**
 * Description of Cache
 *
 * @author hoksi
 */
class Cache extends BaseController
{
    public function index()
    {
        $data = [
            'now' => date('Y-m-d H:i:s')
        ];

        echo view('response/view/cache', $data);
        echo view('response/view/cache', $data, ['cache' => 60]);
        echo view('response/view/cache', $data, ['cache' => 10, 'cache_name' => 'my_cached_view']);
    }
}