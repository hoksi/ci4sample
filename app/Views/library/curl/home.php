<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <p>
                CURLRequest 라이브러리는 서버와 통신할 수있는 CURL 기반의 경량 HTTP 클라이언트입니다.<br/>
                가장 널리 사용되는 Guzzle HTTP Client 라이브러리의 인터페이스를 모델로 합니다.<br/>
                인터페이스가 Guzzle 구문과 동일하게 유지되므로, 이 라이브러리를 대신 Guzzle로 바꾸어도 거의 변경없이 사용 가능합니다.
            </p>

            <h2>라이브러리 로드</h2>

            <pre class="prettyprint">
// 서비스 클래스를 통해 로드
$client1  = \Config\Services::curlrequest();

// service() 헬퍼를 통해 로드
$client2 = service('curlrequest');

// cURL 요청 처리 방법을 수정하기 위해 옵션 배열을 첫 번째 매개 변수로 전달할 수 있습니다.
$client3 = \Config\Services::curlrequest([
    'baseURI' => 'http://google.co.kr',
    'timeout' => 3,
]);</pre>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>요청 만들기</h2>

            <p>
                CURL 요청 작업은 `request` 객체를 작성하여 요청을 처리하고 `response` 객체를 받습니다.
            </p>

            <p>
                대부분의 통신은 `request()` 메소드를 통해 이루어집니다.<br/>
                이 메소드는 요청 결과를 `Response` 인스턴스로 반환합니다.
            </p>
            <pre class="prettyprint">$response = $client->request('GET', 'https://www.google.com/search', ['q' => 'codeigniter']);</pre>

            <p>
                각 HTTP 요청에 대한 단축 메소드도 제공합니다.
            </p>
            <pre class="prettyprint">
$client->get('http://example.com');
$client->delete('http://example.com');
$client->head('http://example.com');
$client->options('http://example.com');
$client->patch('http://example.com');
$client->put('http://example.com');
$client->post('http://example.com');</pre>
        <?=tabler_card_end() ?>
        
        <?= tabler_card_start() ?>
            <h2>Response 객체 사용</h2>

            <p>
                각 request() 호출은 유용한 정보와 메소드를 포함하는 `response` 객체를 반환합니다.<br/>
            </p>
            
            <?= view('library/curl/curl_response') ?>
        <?=tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>Request 옵션</h2>

            <p>
                request() 메소드에 전달할 수 있는 모든 옵션에 대해 설명합니다.
            </p>

            <?= view('library/curl/curl_option') ?>


        <?=tabler_card_end() ?>


    </div>
</div>
<?= $this->endSection() ?>