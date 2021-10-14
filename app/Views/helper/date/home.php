<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>
            <p>
                Date 작업을 지원하는 함수 모음입니다.<br/>
                이 헬퍼는 다음 코드를 사용하여 로드합니다.
            </p>
            <pre class="prettyprint">helper('date');</pre>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>now([$timezone = null])</h2>

            <p>
                구성(config) 파일의 “time reference” 설정에 따라 현재 시간을 서버 또는 PHP지원 시간대를 참조하는 UNIX타임 스탬프로 반환합니다.<br/>
                시간대($timezone)가 제공되지 않으면 `time_reference` 설정에 따라 time()이 반환됩니다.
            </p>

            <h2>timezone_select([$class = '', $default = '', $what = DateTimeZone::ALL, $country = null])</h2>

            <p>
                사용 가능한 시간대의 select 폼 필드를 생성합니다.<br/>
            </p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'ExamShow',
                'title' => '/helper/date/exam',
                'href' => '/helper/date/exam',
            ],
            [
                'id' => 'Exam',
                'title' => 'Exam.php',
                'href' => '/sample/home/view/Controllers/Helper/Date/Exam',
            ],
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>