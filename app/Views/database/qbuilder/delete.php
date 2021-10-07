<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<h2>$builder->delete()</h2>

<p>
    DELETE SQL을 생성하고 쿼리를 실행합니다.
</p>
<pre class="prettyprint">
$builder->delete(['idx' => 1]);

<?= print_r($builder->delete(['idx' => 1]), true) ?>

<?= get_last_query() ?>
</pre>

<p>
    첫 번째 매개 변수는 where절입니다. 함수의 첫 번째 매개 변수에 데이터를 전달하는 대신 `where()`나 `or_where()` 함수를 사용할 수 있습니다.<br/>
    테이블에서 모든 데이터를 삭제하려면 `truncate()` 함수 또는 `emptyTable()` 함수를 사용합니다.
</p>
<pre class="prettyprint">
$builder->where(['idx' => 1])->delete();

<?= print_r($builder->where(['idx' => 1])->delete(), true) ?>

<?= get_last_query() ?>
</pre>

<h2>$builder->emptyTable()</h2>

<p>
    DELETE SQL을 생성하고 쿼리를 실행합니다.
</p>
<pre class="prettyprint">
$builder->emptyTable();

<?= print_r($builder->emptyTable(), true) ?>

<?= get_last_query() ?>
</pre>

<h2>$builder->truncate()</h2>

<p>
    TRUNCATE SQL을 생성하고 쿼리를 실행합니다.
</p>
<pre class="prettyprint">
$builder->truncate();

<?= print_r($builder->truncate(), true) ?>

<?= get_last_query() ?>
</pre>