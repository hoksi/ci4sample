<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <p>
                CodeIgniter는 SPA(Single Page Application)에 데이터를 제공하거나 API 구축을 쉽게할 수 있도록 API Response Trait을 제공합니다.
            </p>

            <h2>사용샘플</h2>

            <p>
                다음 예는 컨트롤러에서 일반적으로  `APIResponse Trait`을 사용하는 방법입니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam1Show',
                'title' => '/response/api/exam1',
                'href' => '/response/api/exam1',
            ],
            [
                'id' => 'Exam1',
                'title' => 'Exam1.php',
                'href' => '/sample/home/view/Controllers/Response/Api/Exam1',
            ],
            [
                'id' => 'UserModel',
                'title' => 'UserModel.php',
                'href' => '/sample/home/view/Models/Response/Api/UserModel',
            ],
            [
                'id' => 'Exam1View',
                'title' => 'exam1.php',
                'href' => '/sample/home/view/Views/response/api/exam1',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <p>
                다음은 일반적으로 자주 사용되는 상태코드 메소드입니다.
            </p>
            <pre class="prettyprint">
// Generic response method
respond($data, 200);
// Generic failure response
fail($errors, 400);
// Item created response
respondCreated($data);
// Item successfully deleted
respondDeleted($data);
// Command executed by no response required
respondNoContent($message);
// Client isn't authorized
failUnauthorized($description);
// Forbidden action
failForbidden($description);
// Resource Not Found
failNotFound($description);
// Data did not validate
failValidationError($description);
// Resource already exists
failResourceExists($description);
// Resource previously deleted
failResourceGone($description);
// Client made too many requests
failTooManyRequests($description);</pre>

            <p>
                위 메소드중 하나로 데이터를 전달하면 다음 기준에 따라 응답(Response) 데이터 유형이 결정됩니다.
            </p>
            <ul>
                <li>`$data`가 문자열이면 HTML로 처리됩니다.</li>
                <li>
                    `$data`가 배열이면 컨트롤러의 `$this-format` 값에 따라 형식이 지정됩니다.<br/>
                    `$this-format`가 비어 있으면 클라이언트가 요청한 유형으로 전송합니다.(기본적으로 `JSON`)
                </li>
            </ul>
            <p>
                각 메소드에 대한 자세한 설명은 <a href="http://ci4doc.cikorea.net/outgoing/api_responses.html#class-reference" target="_blank">사용자 가이드</a>를 참고하십시오.
            </p>
        <?= tabler_card_end() ?>
    </div>
</div>
<?= $this->endSection() ?>