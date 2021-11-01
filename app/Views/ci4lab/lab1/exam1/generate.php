<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
<form method="post" action="/ci4lab/lab1/exam1/download">
    <button type="submit">다운로드</button>
    <pre><?= $data ?></pre>
</form>
<?= $this->endSection() ?>