<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
<form method="post" action="/ci4lab/lab1/exam1/download">
    <button type="submit">다운로드</button>
    <button type="button" onclick="history.go(-1)">뒤로</button>
    <pre><?= $data ?></pre>
</form>
<?= $this->endSection() ?>