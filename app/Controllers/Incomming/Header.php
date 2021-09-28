<?php
namespace App\Controllers\Incomming;

use App\Controllers\BaseController;

/**
 * Description of Header
 *
 * @author hoksi
 */
class Header extends BaseController
{
    public function index()
    {
        !d($this->request->headers());
    }

    public function header()
    {
        !d([
            '단일 헤더만 필요한 경우 header() 메소드를 사용합니다.',
            '지정된 헤더 객체가 존재하는 경우 키의 대소문자를 구분하지 않고 가져오고, 그렇지 않으면 null을 반환합니다.',
            'host' => $this->request->header('host'),
            'DNT' => $this->request->header('DNT'),
        ]);
    }

    public function hasHeader()
    {
        !d([
            'hasHeader()를 사용하여 헤더가 있는지 확인할 수 있습니다.',
            'host' => $this->request->hasHeader('host'),
            'DNT' => $this->request->hasHeader('DNT'),
        ]);
    }

    public function headerLine()
    {
        !d([
            '헤더의 모든 값을 가진 문자열이 필요하다면 getHeaderLine() 메소드를 사용합니다.',
            'Accept-Encoding' => $this->request->getHeaderLine('accept-encoding')
        ]);
    }

    public function castString()
    {
        !d([
            '이름과 값을 가진 전체 헤더 문자열이 필요하면 헤더를 문자열로 캐스트(cast)합니다.',
            'host' => (string) $this->request->header('host'),
        ]);
    }
}