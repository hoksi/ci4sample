<?php

namespace App\Controllers\Response\Http;

use App\Controllers\BaseController;

/**
 * Description of SetOutput
 *
 * @author hoksi
 */
class SetOutput extends BaseController
{

    public function index()
    {
        $body = '404오류?';

        return $this->response
                ->setStatusCode(404)
                ->setBody($body);
    }

    public function custom()
    {
        $body = 'setStatusCode() 메소드의 두 번째 매개 변수로 사용자 정의 이유(reason)를 추가할 수 있습니다.';

        return $this->response
                ->setStatusCode(404, 'Nope. Not here.')
                ->setBody($body);
    }

    public function json()
    {
        $data = [
            '배열을 `setJSON()` 메소드를 사용하여 JSON으로 형식화하고 컨텐츠 유형 헤더를 적절한 MIME으로 설정할 수 있습니다.',
            'success' => true,
            'id' => 123,
        ];

        return $this->response->setJSON($data);
    }

    public function xml()
    {
        $data = [
            '배열을 `setXML()` 메소드를 사용하여 XML로 형식화하고 컨텐츠 유형 헤더를 적절한 MIME으로 설정할 수 있습니다.',
            'success' => true,
            'id' => 123,
        ];

        return $this->response->setXML($data);
    }

}