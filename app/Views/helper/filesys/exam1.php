<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
<p>
    탐색할 디렉토리의 깊이는 두 번째 매개 변수(정수)를 사용합니다.<br/>
    기본 값은 `1`이며 최상위 디렉토리만 매핑합니다.
</p>

<pre class="prettyprint">
$mydirectory = '<?= $mydirectory ?>';

directory_map($mydirectory, 1);
=> <?= print_r(directory_map($mydirectory, 1), true) ?>
</pre>

<p>
    기본적으로 숨김(hidden) 파일과 숨김 디렉토리는 건너뜁니다.<br/>
    세 번째 매개 변수를 `true`로 설정하면 숨긴 파일과 디렉토리도 가져옵니다.
</p>
<pre class="prettyprint">
$mydirectory = '<?= $mydirectory ?>';

directory_map($mydirectory, false, true);
=> <?= print_r(directory_map($mydirectory, false, true), true) ?>
</pre>

<?= $this->endSection() ?>