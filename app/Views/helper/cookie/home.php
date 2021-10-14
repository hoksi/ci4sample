<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <p>
                쿠키 작업을 지원하는 함수 모음입니다.<br/>
                이 헬퍼는 다음 코드를 사용하여 로드합니다.
            </p>
            <pre class="prettyprint">helper('cookie');</pre>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>set_cookie($name[, $value = ''[, $expire = ''[, $domain = ''[, $path = '/'[, $prefix = ''[, $secure = false[, $httpOnly = false]]]]]]])</h2>

            <p>
                브라우저 쿠키를 설정합니다.<br/>
                이 함수는 Response::setCookie()의 별칭입니다.
            </p>

            <h2>get_cookie($index[, $xssClean = false])</h2>

            <p>
                브라우저 쿠키를 가져옵니다.<br/>
                이 함수는 `app/Config/App.php` 파일의 `$cookiePrefix` 설정에 따라 접두사가 설정됩니다.
            </p>

            <h2>has_cookie(string $name[, ?string $value = null[, string $prefix = '']])</h2>

            <p>
                키를 사용하여 쿠키가 있는지 확인합니다.<br/>
                `Response::hasCookie()`의 별칭(alias)입니다.
            </p>

            <h2>delete_cookie($name[, $domain = ''[, $path = '/'[, $prefix = '']]])</h2>

            <p>
                쿠키를 삭제합니다.<br/>
                필수값으로 쿠키 이름만 필요하며, 사용자 정의 경로나 다른 값을 설정하지 않아도 됩니다.<br/>
                이 함수는 값과 만료 매개 변수가 없다는 점을 제외하면 set_cookie()와 동일합니다.
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Exam1Show',
                'title' => '/helper/cookie/exam1',
                'href' => '/helper/cookie/exam1',
            ],
            [
                'id' => 'Exam1GetCookieShow',
                'title' => '/helper/cookie/exam1/getCookie',
                'href' => '/helper/cookie/exam1/getCookie',
            ],
            [
                'id' => 'Exam1DeleteCookieShow',
                'title' => '/helper/cookie/exam1/deleteCookie',
                'href' => '/helper/cookie/exam1/deleteCookie',
            ],
            [
                'id' => 'Exam1',
                'title' => 'Exam1.php',
                'href' => '/sample/home/view/Controllers/Helper/Cookie/Exam1',
            ],
            [
                'id' => 'Exam1View',
                'title' => 'exam1.php',
                'href' => '/sample/home/view/Views/helper/cookie/exam1',
            ],
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>