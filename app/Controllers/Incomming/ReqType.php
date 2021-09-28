<?php
namespace App\Controllers\Incomming;

use App\Controllers\BaseController;

/**
 * Description of ReqType
 *
 * @author hoksi
 */
class ReqType extends BaseController
{
    public function index()
    {
        !d([
            'isAJAX' => $this->request->isAJAX(),
            'isCLI' => $this->request->isCLI(),
        ]);
    }

    public function getMethod()
    {
        !d([
            'getMethod() 메소드를 이용하여 요청중인 HTTP 메소드를 확인할 수 있습니다.',
            'getMethod' => $this->request->getMethod(),
        ]);
    }

    public function upperGetMethod()
    {
        !d([
            'getMethod() 메소드는 기본적으로 소문자(예 : ‘get’, ‘post’, 등)로 값을 반환합니다.',
            'strtoupper()함수를 이용하여 대문자로 변환할 수 있습니다.',
            'getMethod' => strtoupper($this->request->getMethod()),
        ]);
    }

    public function isSecure()
    {
        !d([
            'isSecure() 메소드를 이용하여 HTTPS 연결을 통해 요청이 이루어 졌는지 확인할 수 있습니다.',
            'isSecure' => $this->request->isSecure(),
        ]);
    }
}