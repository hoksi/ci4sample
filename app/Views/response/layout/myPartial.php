<?= $this->extend('response/layout/myLayout') ?>

<?= $this->section('content') ?>
    <h1>Hello World!</h1>

    <?= $this->include('response/layout/sidebar') ?>
<?= $this->endSection() ?>