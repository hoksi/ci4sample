<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>

<p>
    지정된 경로의 파일 이름, 파일 크기, 날짜 및 권한을 포함하는 배열을 반환합니다.
</p>
<pre class="prettyprint">
$filePath = '<?= $filePath ?>';

get_dir_file_info($filePath);

<?php
    print_r(get_dir_file_info($filePath));
?>
</pre>

<p>
    시스템 부하를 방지하기 위하여 두 번째 매개 변수를 `false`로 설정한 경우에만 지정된 경로에 포함된 하위 폴더도 배열로 반환합니다.<br/>
</p>
<pre class="prettyprint">
$filePath = '<?= $filePath ?>';

get_dir_file_info($filePath, false);

<?php
    print_r(get_dir_file_info($filePath, false));
?>
</pre>

<?= $this->endSection() ?>