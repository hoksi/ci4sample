<?php
namespace App\Controllers\Incomming;

use App\Controllers\BaseController;

/**
 * Description of Url
 *
 * @author hoksi
 */
class Url extends BaseController
{
    public function index()
    {
        $uri = (string) $this->request->uri;

        !d($uri);
    }

    public function all()
    {
        $uri = $this->request->uri;

        !d([
            'uri 객체는 요청의 일부를 얻을 수 있는 모든 기능을 제공합니다.',
            'getScheme' => $uri->getScheme(),
            'getAuthority' => $uri->getAuthority(),
            'getUserInfo' => $uri->getUserInfo(),
            'getHost' => $uri->getHost(),
            'getPort' => $uri->getPort(),
            'getPath' => $uri->getPath(),
            'getQuery' => $uri->getQuery(),
            'getSegments' => $uri->getSegments(),
            'getSegment' => $uri->getSegment(1),
            'getTotalSegments' => $uri->getTotalSegments(),
        ]);
    }
}