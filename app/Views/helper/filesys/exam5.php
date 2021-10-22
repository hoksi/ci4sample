<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>

<p>
    지정된 경로에 포함된 모든 파일의 이름을 배열로 반환합니다.
</p>
<pre class="prettyprint">
$filePath = '<?= $filePath ?>';

get_filenames($filePath);

<?php
    print_r(get_filenames($filePath));
?>
</pre>

<p>
    파일 이름의 일부로 경로를 포함하고 싶다면 두 번째 매개 변수를 `true`로 설정합니다.
</p>
<pre class="prettyprint">
$filePath = '<?= $filePath ?>';

get_filenames($filePath, true);

<?php
    print_r(get_filenames($filePath, true));
?>
</pre>

<?= $this->endSection() ?>