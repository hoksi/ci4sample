<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
<p>
    파일이 존재하지 않으면 함수가 파일을 작성합니다.
</p>

<pre class="prettyprint">
$writeFile = '<?= $writeFile ?>';
$data = '<?= $data ?>';

// 지정된 경로의 파일에 데이터를 저장합니다.
write_file($writeFile, $data);

* <?= $writeFile ?>

<?php
    write_file($writeFile, $data);

    print_r(file_get_contents($writeFile)) ;
?>
</pre>

<?= $this->endSection() ?>