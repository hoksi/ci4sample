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
                다음 예는 컨트롤러내에서 일반적인 사용 패턴입니다.
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
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>