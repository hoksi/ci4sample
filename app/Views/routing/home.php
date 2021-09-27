<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title('URI 라우팅(Routing)') ?>

    <div class="page-body">

        <!-- 라우팅 기초 -->
        <?= view('routing/basic') ?>
        <!-- Custom -->
        <?= view('routing/custom') ?>
        <!-- Closer -->
        <?= view('routing/closer') ?>
        <!-- Group -->
        <?= view('routing/group') ?>

    </div>
</div>
<?= $this->endSection() ?>