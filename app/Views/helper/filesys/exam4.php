<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
<pre class="prettyprint">
$deletePath = '<?= $deletePath ?>';

* <?= $deletePath ?>

<?php
    print_r(directory_map($deletePath, 1));
?>

// 지정된 경로의 모든 파일 삭제
delete_files($deletePath);

* <?= $deletePath ?>

<?php
    delete_files($deletePath);
    
    print_r(directory_map($deletePath, 1));
?>
</pre>

<p>
    두 번째 매개 변수가 `true`로 설정되면 제공된 경로에 포함된 모든 디렉토리도 삭제됩니다.
</p>

<pre class="prettyprint">
$deletePath = '<?= $deletePath ?>';

// 지정된 경로의 모든 파일과 디렉토리 삭제
delete_files($deletePath, true);

* <?= $deletePath ?>

<?php
    delete_files($deletePath, true);

    print_r(directory_map($deletePath, 1));
?>
</pre>

<?= $this->endSection() ?>