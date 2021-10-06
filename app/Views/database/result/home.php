<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <h2>getResult()</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'GetResult',
                'title' => 'GetResult.php',
                'href' => '/sample/home/view/Controllers/Database/Result/GetResult',
            ],
            [
                'id' => 'GetResultShow',
                'title' => '/database/result/getResult',
                'href' => '/database/result/getResult',
            ],
            [
                'id' => 'GetResultArrayShow',
                'title' => '/database/result/getResult/array',
                'href' => '/database/result/getResult/array',
            ],
            [
                'id' => 'GetResultCustomShow',
                'title' => '/database/result/getResult/custom',
                'href' => '/database/result/getResult/custom',
            ],
            [
                'id' => 'GetResultUser',
                'title' => 'User.php',
                'href' => '/sample/home/view/Controllers/Database/Result/User',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>getRow()</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'GetRow',
                'title' => 'GetRow.php',
                'href' => '/sample/home/view/Controllers/Database/Result/GetRow',
            ],
            [
                'id' => 'GetRowShow',
                'title' => '/database/result/getrow',
                'href' => '/database/result/getrow',
            ],
            [
                'id' => 'GetRowUser',
                'title' => 'User.php',
                'href' => '/sample/home/view/Controllers/Database/Result/User',
            ],
            [
                'id' => 'GetRowArrayShow',
                'title' => '/database/result/GetRow/array',
                'href' => '/database/result/GetRow/array',
            ],
            [
                'id' => 'GetRowNaviShow',
                'title' => '/database/result/GetRow/navi',
                'href' => '/database/result/GetRow/navi',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>GetUnbufferedRow()</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'GetUnbufferedRow',
                'title' => 'GetUnbufferedRow.php',
                'href' => '/sample/home/view/Controllers/Database/Result/GetUnbufferedRow',
            ],
            [
                'id' => 'GetUnbufferedRowShow',
                'title' => '/database/result/getUnbufferedRow',
                'href' => '/database/result/getUnbufferedRow',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>결과 헬퍼 메소드</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Helper',
                'title' => 'Helper.php',
                'href' => '/sample/home/view/Controllers/Database/Result/Helper',
            ],
            [
                'id' => 'HelperShow',
                'title' => '/database/result/helper',
                'href' => '/database/result/helper',
            ],
        ]) ?>
    </div>
</div>
<?= $this->endSection() ?>