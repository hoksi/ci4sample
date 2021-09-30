<?= $this->extend('response/layout/myLayout') ?>

<?= $this->section('content') ?>
    <h1>Hello World!</h1>
    <?= $this->section('javascript') ?>
        let a = 'a';        
    <?= $this->endSection() ?>
<?= $this->endSection() ?>