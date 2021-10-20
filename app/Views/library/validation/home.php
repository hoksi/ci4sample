<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <p>
                다음은 CodeIgniter의 폼 검증을 구현하기 위한 “실습” 자습서입니다.<br/>
                폼 검증을 구현하려면 다음 세 가지가 필요합니다.
            </p>

            <ol>
                <li>폼이 포함된 뷰 파일</li>
                <li>제출(submit) 성공시 표시될 “성공” 메시지가 포함된 뷰 파일</li>
                <li>제출된 데이터를 수신하고 처리하는 컨트롤러 메소드</li>
            </ol>

        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam1Show',
                'title' => '/library/validation/exam1',
                'href' => '/library/validation/exam1',
            ],
            [
                'id' => 'Exam1',
                'title' => 'Exam1.php',
                'href' => '/sample/home/view/Controllers/Library/Validation/Exam1',
            ],
            [
                'id' => 'Exam1SignupView',
                'title' => 'signup.php',
                'href' => '/sample/home/view/Views/library/validation/exam1/signup',
            ],
            [
                'id' => 'Exam1SuccessView',
                'title' => 'success.php',
                'href' => '/sample/home/view/Views/library/validation/exam1/success',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <p>
                `signup.php` 파일은 몇 가지 예외가 있는 표준 웹폼입니다.
            </p>
            <ol>
                <li>
                    폼 헬퍼를 사용하여 `&lt;form&gt;` 태그를 만듭니다.<br/>
                    표준 HTML을 사용하여 `&lt;form&gt;`을 작성할 수 있지만, 헬퍼를 사용하면 구성 파일의 URL을 기반으로 `action` URL이 생성되는 장점이 있습니다.<br/>
                    이렇게 하면 URL이 변경되는 경우에도 어플리케이션의 잘 동작하며, 이식성이 향상됩니다.
                </li>
                <li>
                    폼 상단에 다음 함수 호출이 있습니다.<br/>
                    <pre class="prettyprint">$validation->listErrors()</pre>
                    이 함수는 검증에서 보낸 모든 오류 메시지를 반환합니다. 오류 메시지가 없으면 빈 문자열을 반환합니다.
                </li>
            </ol>
            <p>
                컨트롤러의 index() 메소드는 컨트롤러가 제공하는 유효성 검증 메소드를 사용하고, 뷰 파일에서 사용할 폼 헬퍼와 URL 헬퍼를 로드합니다.<br/>
                폼 검증 루틴도 실행후 검증 성공 여부에 따라 폼 페이지 또는 성공 페이지를 표시합니다.
            </p>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
        <?=tabler_card_end() ?>

    </div>
</div>
<?= $this->endSection() ?>