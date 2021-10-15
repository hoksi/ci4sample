<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
<p>
    세 번째 매개 변수를 통해 덮어쓰기 동작을 변경할 수 있습니다.
</p>

<pre class="prettyprint">
$orgDir = '<?= $orgDir ?>';
$targetDir = '<?= $targetDir ?>';

// 덮어쓰기 않함
directory_mirror($orgDir, $targetDir);
// 덮어쓰기 허용
directory_mirror($orgDir, $targetDir, true);

* <?= $targetDir ?>

<?php
    directory_mirror($orgDir, $targetDir);
    print_r(directory_map($targetDir)) ;
?>
</pre>

<?= $this->endSection() ?>