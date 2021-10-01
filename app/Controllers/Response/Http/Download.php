<?php
namespace App\Controllers\Response\Http;

use App\Controllers\BaseController;

/**
 * Description of Download
 *
 * @author hoksi
 */
class Download extends BaseController
{
    public function index()
    {
        echo '<p>Example</p>';
        echo '<p><a href="/response/http/download/example">Download</a></p>';
        echo '<p>서버에서 기존 파일을 다운로드하려면 두 번째 매개 변수에 명시적으로 null을 전달해야 합니다.</p>';
        echo '<p><a href="/response/http/download/file">File Download</a></p>';
        echo '<p>setFileName() 메소드를 사용하면 클라이언트 브라우저로 전송될 때 파일 이름을 변경할 수 있습니다.</p>';
        echo '<p><a href="/response/http/download/setFileName">setFileName</a></p>';
    }

    public function example()
    {
        $data = 'Here is some text!';
        $name = 'mytext.txt';
        return $this->response->download($name, $data);
    }

    public function file()
    {
        return $this->response->download(WRITEPATH . 'uploads/1.png', null);
    }

    public function setFileName()
    {
        return $this->response->download(WRITEPATH . 'uploads/1.png', null)->setFileName('number.png');
    }
}