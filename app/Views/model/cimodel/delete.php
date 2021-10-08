<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<h2>delete()</h2>

<p>
    첫 번째 매개 변수로 제공된 기본 키 값을 사용하여 모델 테이블에서 일치하는 레코드를 삭제합니다.
</p>
<pre class="prettyprint">
$userModel->delete(1);

<?= print_r($userModel->delete(1), true) ?>

<?= get_last_query() ?>
</pre>

<p>
    첫 번째 매개 변수로 기본 키 배열을 전달하여 한 번에 여러 레코드를 삭제할 수 있습니다
</p>
<pre class="prettyprint">
$userModel->delete([1, 2]);

<?= print_r($userModel->delete([1, 2]), true) ?>

<?= get_last_query() ?>
</pre>

<p>
    매개 변수가 전달되지 않으면 쿼리 빌더의 `delete()` 메소드처럼 작동하며 `where()` 메소드 호출이 필요합니다.
</p>
<pre class="prettyprint">
$userModel->where('idx', 1)->delete();

<?= print_r($userModel->where('idx', 1)->delete(), true) ?>

<?= get_last_query() ?>
</pre>