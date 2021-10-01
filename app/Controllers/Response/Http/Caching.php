<?php
namespace App\Controllers\Response\Http;

use App\Controllers\BaseController;

/**
 * Description of Caching
 *
 * @author hoksi
 */
class Caching extends BaseController
{
    public function index()
    {
        $options = [
            'max-age'  => 5,
            's-maxage' => 10,
            'etag'     => 'caching-test',
        ];
        $this->response->setCache($options);

        echo date('Y-m-d H:i:s');
        echo '<p><a href="/response/http/caching">새로 고침</a></p>';
    }
}