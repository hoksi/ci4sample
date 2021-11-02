<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">
        <?= tabler_card_start() ?>

            <h2>Codeigniter .env 파일 생성기</h2>

            <p>
                다운로드된 `exam.env` 파일을 `.env` 파일로 복사하여 사용하세요.
            </p>

            <?= tabler_iframe_tabs([
                [
                    'id' => 'Exam1Show',
                    'title' => '/ci4lab/lab1/exam1',
                    'href' => '/ci4lab/lab1/exam1',
                ],
                [
                    'id' => 'Exam1',
                    'title' => 'Exam1.php',
                    'href' => '/sample/home/view/Controllers/Ci4lab/Lab1/Exam1',
                ],
                [
                    'id' => 'Exam1Model',
                    'title' => 'Exam1Model.php',
                    'href' => '/sample/home/view/Models/Ci4lab/Lab1/Exam1Model',
                ],
                [
                    'id' => 'Exam1IndexView',
                    'title' => 'index.php',
                    'href' => '/sample/home/view/Views/ci4lab/lab1/exam1/index',
                ],
                [
                    'id' => 'Exam1GenerateView',
                    'title' => 'generate.php',
                    'href' => '/sample/home/view/Views/ci4lab/lab1/exam1/generate',
                ],
            ]) ?>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>

            <h2>BaseController.php 생성기</h2>

            <?= tabler_iframe_tabs([
                [
                    'id' => 'Exam2Show',
                    'title' => '/ci4lab/lab1/exam2',
                    'href' => '/ci4lab/lab1/exam2',
                ],
                [
                    'id' => 'Exam2',
                    'title' => 'Exam2.php',
                    'href' => '/sample/home/view/Controllers/Ci4lab/Lab1/Exam2',
                ],
                [
                    'id' => 'Exam2Model',
                    'title' => 'Exam2Model.php',
                    'href' => '/sample/home/view/Models/Ci4lab/Lab1/Exam2Model',
                ],
                [
                    'id' => 'Exam2IndexView',
                    'title' => 'index.php',
                    'href' => '/sample/home/view/Views/ci4lab/lab1/exam2/index',
                ],
                [
                    'id' => 'Exam2GenerateView',
                    'title' => 'generate.php',
                    'href' => '/sample/home/view/Views/ci4lab/lab1/exam2/generate',
                ],
                [
                    'id' => 'BaseControllerTpl',
                    'title' => 'BaseController.tpl.php',
                    'href' => '/sample/home/view/Views/ci4lab/lab1/exam2/BaseController.tpl',
                ],
            ]) ?>
        <?= tabler_card_end() ?>
    </div>
</div>
<?= $this->endSection() ?>