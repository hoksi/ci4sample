<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title('IncomingRequest Class') ?>

    <div class="page-body">
        
      <?= tabler_card_start() ?>
        <p>
            `IncomingRequest` 클래스는 브라우저와 같은 클라이언트의 HTTP 요청(request)에 대한 객체를 제공하며,
            아래 설명된 메소드 외에도 <a href="http://ci4doc.cikorea.net/incoming/request.html" target="_blank">요청(Request)</a>와 <a href="http://ci4doc.cikorea.net/incoming/message.html" target="_blank">메시지(Message)</a>
            클래스의 모든 메소드에 액세스 할 수 있습니다.
        </p>

        <h2>Accessing the Request</h2>

        <p>클래스가 CodeIgniter\Controller를 상속 받았다면 클래스의 request 속성을 통해 요청(request) 클래스 인스턴스에 엑세스할 수 있습니다.</p>
      <?= tabler_card_end() ?>
      <?= tabler_iframe_tabs([
            [
                'id' => 'UserController',
                'title' => 'UserController.php',
                'href' => '/sample/home/view/Controllers/Incomming/UserController',
            ],
            [
                'id' => 'UserControllerShow',
                'title' => '/incomming/usercontroller',
                'href' => '/incomming/usercontroller',
            ],
      ]) ?>

      <?= tabler_card_start() ?>
        <p>컨트롤러가 아닌 곳에서 요청(Request) 객체에 액세스해야 하는 경우 서비스(Services) class를 통해 사본을 얻을 수 있습니다.</p>

        <pre>$request = \Config\Services::request();</pre>

        <p>컨트롤러 이외의 클래스에서 클래스 속성으로 엑세스하고 싶다면 요청(Request)을 종속성으로 전달하는 것이 좋습니다.</p>

        <pre>&lt;?php
use CodeIgniter\HTTP\RequestInterface;

class SomeClass
{
    protected $request;

    public function __construct(RequestInterface $request)
    {
        $this->request = $request;
    }
}

$someClass = new SomeClass(\Config\Services::request());</pre>

        <h2>요청 유형 결정</h2>

        <p>요청은 AJAX 요청 또는 커맨드 라인에서의 요청등 여러 유형을 포함할 수 있으며, isAJAX()와 isCLI() 메소드로 확인할 수 있습니다</p>
      <?=tabler_card_end() ?>
      <?= tabler_iframe_tabs([
            [
                'id' => 'ReqType',
                'title' => 'ReqType.php',
                'href' => '/sample/home/view/Controllers/Incomming/ReqType',
            ],
            [
                'id' => 'ReqTypeShow',
                'title' => '/incomming/reqtype',
                'href' => '/incomming/reqtype',
            ],
            [
                'id' => 'ReqType1Show',
                'title' => '/incomming/reqtype/getmethod',
                'href' => '/incomming/reqtype/getmethod',
            ],
            [
                'id' => 'ReqType2Show',
                'title' => '/incomming/reqtype/uppergetmethod',
                'href' => '/incomming/reqtype/uppergetmethod',
            ],
            [
                'id' => 'ReqType3Show',
                'title' => '/incomming/reqtype/issecure',
                'href' => '/incomming/reqtype/issecure',
            ],
      ]) ?>

      <?= tabler_card_start() ?>
        <h2>입력 검색</h2>

        <p>요청(Request) 객체를 통해 $_SERVER, $_GET, $_POST, $_ENV에서 입력을 검색할 수 있습니다. 데이터는 자동으로 필터링되지 않으며 요청에 전달된대로 입력 데이터를 리턴합니다.</p>
        <p>전역 변수($_POST[‘something’])를 직접 액세스하는 대신 요청(Request) 객체가 제공하는 메소드를 사용하면 항목이 존재하지 않으면 null을 리턴하고 데이터를 필터링할 수 있습니다.</p>

        <p>`getVar()` 메소드는 $_REQUEST에서 데이터를 가져 오므로 `$_GET`, `$POST`, `$_COOKIE`의 모든 데이터를 반환합니다. 이 방법이 편리하지만, 보안을 위해 다음 메소드 사용을 권장합니다.</p>

        <ul>
            <li>$request->getGet()</li>
            <li>$request->getPost()</li>
            <li>$request->getServer()</li>
            <li>$request->getCookie()</li>
        </ul>

        <p>`$_GET`과  $_POST 모두에서 정보를 검색하지만, 가져오는 순서를 제어하는 메소드도 제공합니다.</p>

        <ul>
            <li>$request->getPostGet() - $_POST 확인 후 $_GET 확인</li>
            <li>$request->getGetPost() - $_GET 확인 후 $_POST 확인</li>
        </ul>
        
        <p>다음 예와 같이 항목이 먼저 존재하는지 테스트하지 않아도 편리하게 데이터를 사용할 수 있습니다.</p>
      <?=tabler_card_end() ?>
      <?= tabler_iframe_tabs([
            [
                'id' => 'GetInput',
                'title' => 'GetInput.php',
                'href' => '/sample/home/view/Controllers/Incomming/GetInput',
            ],
            [
                'id' => 'GetInput1Show',
                'title' => '/incomming/getinput',
                'href' => '/incomming/getinput',
            ],
            [
                'id' => 'GetInput2Show',
                'title' => '/incomming/getinput?foo=data',
                'href' => '/incomming/getinput?foo=data',
            ],   
      ]) ?>

      <?= tabler_card_start() ?>
        <h2>입력 데이터 필터링</h2>

        <p>어플리케이션의 보안을 유지하려면 액세스하는 모든 입력을 필터링해야 합니다. 위에 설명된 메소드들의 두 번째 매개 변수로 사용할 필터 유형을 전달할 수 있습니다.</p>
        <p>php 네이티브(native) 함수 `filter_var()`가 필터링에 사용됩니다. <a href="https://www.php.net/manual/en/filter.filters.php" target="_blank">유효한 필터 유형</a> 목록을 보려면 PHP 매뉴얼로 이동하십시오.</p>
        <p>다음 예는 GET 변수를 필터링합니다.</p>
      <?=tabler_card_end() ?>
      <?= tabler_iframe_tabs([
            [
                'id' => 'GetFilter',
                'title' => 'GetFilter.php',
                'href' => '/sample/home/view/Controllers/Incomming/GetFilter',
            ],
            [
                'id' => 'GetFilter1Show',
                'title' => '/incomming/getfilter?email=test@test.com',
                'href' => '/incomming/getfilter?email=test@test.com',
            ],
            [
                'id' => 'GetFilter2Show',
                'title' => '/incomming/getfilter?email=테스트@테스트.com',
                'href' => '/incomming/getfilter?email=테스트@테스트.com',
            ],
      ]) ?>

      <?= tabler_card_start() ?>
        <h2>헤더 검색</h2>

        <p>`getHeaders()` 메소드를 사용하면 요청과 함께 전송된 모든 헤더에 액세스할 수 있습니다. 이 메소드는 키를 헤더 이름으로 사용하여 모든 헤더의 배열을 `CodeIgniter\HTTP\Header`로 반환합니다.</p>
      <?=tabler_card_end() ?>
      <?= tabler_iframe_tabs([
            [
                'id' => 'Header',
                'title' => 'Header.php',
                'href' => '/sample/home/view/Controllers/Incomming/Header',
            ],
            [
                'id' => 'Header1Show',
                'title' => 'index',
                'href' => '/incomming/header',
            ],
            [
                'id' => 'Header2Show',
                'title' => 'header',
                'href' => '/incomming/header/header',
            ],
            [
                'id' => 'Header3Show',
                'title' => 'hasHeader',
                'href' => '/incomming/header/hasHeader',
            ],
            [
                'id' => 'Header4Show',
                'title' => 'headerLine',
                'href' => '/incomming/header/headerLine',
            ],
            [
                'id' => 'Header5Show',
                'title' => 'castString',
                'href' => '/incomming/header/castString',
            ],
      ]) ?>

      <?= tabler_card_start() ?>
        <h2>요청 URL</h2>

        <p>`getHeaders()` 메소드를 사용하면 요청과 함께 전송된 모든 헤더에 액세스할 수 있습니다. 이 메소드는 키를 헤더 이름으로 사용하여 모든 헤더의 배열을 `CodeIgniter\HTTP\Header`로 반환합니다.</p>
      <?=tabler_card_end() ?>

    </div>
</div>
<?= $this->endSection() ?>