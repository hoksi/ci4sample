<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <h2>Response 클래스</h2>

            <p>`Response` 클래스는 인스턴스화되어 컨트롤러로 전달되며, $this->response를 통해 액세스할 수 있습니다.</p>
            <p>CodeIgniter가 헤더와 본문 전송을 담당하므로 클래스를 직접 만지게되는 경우는 드물지만, 매우 특정한 상태 코드를 재 전송하거나, HTTP 캐싱을 활용해야 할 때 매우 유용합니다.</p>

            <h2>출력 설정</h2>
            <p>출력을 직접 설정해야 하고 자동으로 가져 오기 위해 CodeIgniter에 의존하지 않는 경우, `setBody` 메소드를 사용하여 수동으로 수행할 수 있습니다.</p>
            <p>`setBody` 메소드는 일반적으로 응답의 상태 코드 설정과 함께 사용됩니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'SetOutput',
                'title' => 'SetOutput.php',
                'href' => '/sample/home/view/Controllers/Response/Http/SetOutput',
            ],
            [
                'id' => 'SetOutputShow',
                'title' => '/response/http/setoutput',
                'href' => '/response/http/setoutput',
            ],
            [
                'id' => 'SetOutputCustomShow',
                'title' => '/response/http/setoutput/custom',
                'href' => '/response/http/setoutput/custom',
            ],
            [
                'id' => 'SetOutputJsomShow',
                'title' => '/response/http/setoutput/json',
                'href' => '/response/http/setoutput/json',
            ],
            [
                'id' => 'SetOutputXmlShow',
                'title' => '/response/http/setoutput/xml',
                'href' => '/response/http/setoutput/xml',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>헤더 설정</h2>

            <p>응답에 대해 헤더를 설정해야 하는 경우가 종종 있습니다. 응답(Response) 클래스는 setHeader() 메소드를 사용하여 이것을 매우 간단하게 만듭니다.</p>
            <p>첫 번째 매개 변수는 헤더의 이름입니다. 두 번째 매개 변수는 값으로, 클라이언트로 전송될 때 올바르게 결합될 문자열 또는 값의 배열입니다.</p>
            <p>기본 PHP 함수를 사용하는 대신 이러한 함수를 사용하면 헤더가 조기에 전송되지 않아 오류가 발생하고 테스트할 수 있습니다.</p>

            <pre>return $this->response
    ->setHeader('Location', 'http://example.com')
    ->setHeader('WWW-Authenticate', 'Negotiate');</pre>

            <p>헤더가 존재하고 둘 이상의 값을 가질 수 있는 경우 appendHeader()과 prependHeader() 메소드를 사용하여 값을 각각 값 목록의 끝 또는 시작에 추가할 수 있습니다.<p>
            <p>첫 번째 매개 변수는 헤더의 이름이고 두 번째 매개 변수는 추가하거나 추가할 값입니다.</p>

            <pre>return $this->response
    ->setHeader('Cache-Control', 'no-cache')
    ->appendHeader('Cache-Control', 'must-revalidate');</pre>

            <p>헤더 이름을 단일 매개 변수로 사용하는 removeHeader() 메소드를 사용하여 응답에서 헤더를 제거할 수 있습니다. 대/소문자를 구분하지 않습니다.</p>

            <pre>$this->response->removeHeader('Location');</pre>

            <h2>강제 파일 다운로드</h2>

            <p>Response 클래스는 클라이언트에게 파일을 보내는 간단한 방법을 제공하여 브라우저에 데이터를 컴퓨터로 다운로드하라는 메시지를 표시합니다.</p>
            <p>첫 번째 매개 변수는 다운로드 한 파일의 이름을 지정 하는 이름이고, 두 번째 매개 변수는 파일 데이터입니다.</p>
            <p>두 번째 매개 변수를 null로 설정하고 $filename이 읽을 수 있는 파일 경로인 경우 해당 내용을 대신 읽습니다.</p>
            <p>세 번째 매개 변수를 true(boolean)로 설정하면 실제 파일 MIME 유형 (파일 이름 확장자를 기준으로)이 전송되고, 브라우저에 해당 유형에 대한 핸들러가 있는 경우 이를 사용할 수 있습니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Download',
                'title' => 'Download.php',
                'href' => '/sample/home/view/Controllers/Response/Http/Download',
            ],
            [
                'id' => 'DownloadShow',
                'title' => '/response/http/download',
                'href' => '/response/http/download',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>HTTP 캐싱(Caching)</h2>

            <p>HTTP 사양에는 클라이언트(종종 웹 브라우저)가 결과를 캐시하는데 도움이 되는 도구가 내장되어 있습니다.</p>
            <p>올바르게 사용되면 아무것도 변경되지 않았으므로 클라이언트에 서버에 연결할 필요가 없다는 사실을 알리기 때문에 애플리케이션의 성능이 크게 향상될 수 있습니다.</p>
            <p>HTTP 캐싱은 `Cache-Control`와 `ETag` 헤더를 통해 처리됩니다. 모든 캐시 헤더 기능은 <a href="https://developers.google.com/web/fundamentals/performance/optimizing-content-efficiency/http-caching" target="_blank">Google Developers</a>를 참고 하세요.</p>
            <p>기본적으로 CodeIgniter를 통해 전송된 모든 응답 오브젝트에는 HTTP 캐싱이 해제되어 있지만 setCache() 메소드를 이용하면 필요한 캐쉬 값을 설정할 수 있습니다.</p>
            <p>`$options` 배열은 몇 가지 예외를 제외하고 Cache-Control 헤더에 지정된 키/값 쌍의 배열을 취합니다. 특정 상황에 필요한대로 모든 옵션을 자유롭게 설정할 수 있습니다.</p>
            <p>대부분의 옵션은 Cache-Control 헤더에 적용되지만 etag와 last-modified 옵션은 해당 헤더에 Codeignitr가 적절하게 처리합니다.</p>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Caching',
                'title' => 'Caching.php',
                'href' => '/sample/home/view/Controllers/Response/Http/Caching',
            ],
            [
                'id' => 'CachingShow',
                'title' => '/response/http/caching',
                'href' => '/response/http/caching',
            ],
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>