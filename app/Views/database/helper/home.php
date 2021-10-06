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

        <?= tabler_card_start() ?>
            <h2>데이터베이스 정보</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Database',
                'title' => 'Database.php',
                'href' => '/sample/home/view/Controllers/Database/Helper/Database',
            ],
            [
                'id' => 'DatabaseShow',
                'title' => '/database/helper/database',
                'href' => '/database/helper/database',
            ],
        ]) ?>
    </div>
</div>
<?= $this->endSection() ?>