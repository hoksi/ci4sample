<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <h2>쿼리 실행 정보</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Query',
                'title' => 'Query.php',
                'href' => '/sample/home/view/Controllers/Database/Helper/Query',
            ],
            [
                'id' => 'QueryShow',
                'title' => '/database/helper/query',
                'href' => '/database/helper/query',
            ],
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>