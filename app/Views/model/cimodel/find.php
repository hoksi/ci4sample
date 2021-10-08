<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<h2>find()</h2>

<p>
    첫 번째 매개 변수로 전달된 값과 기본 키가 일치하는 단일 행(row)을 리턴합니다.
</p>
<pre class="prettyprint">
$userModel->find(1);

<?= print_r($userModel->find(1), true) ?>

<?= get_last_query() ?>
</pre>

<p>
    값은 `$returnType`에 지정된 형식으로 반환됩니다.<br/>
    하나의 키 대신 primaryKey 배열을 전달하여 둘 이상의 행을 반환하도록 지정할 수 있습니다.
</p>
<pre class="prettyprint">
$userModel->find([1, 2]);

<?= print_r($userModel->find([1, 2]), true) ?>

<?= get_last_query() ?>
</pre>

<p>
    매개 변수를 전달하지 않으면, `findAll()`처럼 작동하여 모델의 테이블에 있는 모든 행을 리턴합니다.
</p>
<pre class="prettyprint">
$userModel->find();

<?= print_r($userModel->find(), true) ?>

<?= get_last_query() ?>
</pre>

<h2>findColumn()</h2>

<p>
    null 또는 인덱스화된 열(column)의 값 배열을 반환합니다.<br/>
    `$column_name`은 단일 열의 이름이어야 합니다. 그렇지 않으면 DataException이 발생합니다.
</p>
<pre class="prettyprint">
$userModel->findColumn('name');

<?= print_r($userModel->findColumn('name'), true) ?>

<?= get_last_query() ?>
</pre>

<p>
    검색 조건은 쿼리 빌더의 `where()` 메소드를 통하여 전달할 수 있습니다.
</p>
<pre class="prettyprint">
$userModel->where('idx', 1)->findColumn('name');

<?= print_r($userModel->where('idx', 1)->findColumn('name'), true) ?>

<?= get_last_query() ?>
</pre>

<h2>findAll()</h2>

<p>
    테이블에서 모든 결과를 검색하여 반환합니다.
</p>
<pre class="prettyprint">
$userModel->findAll();

<?= print_r($userModel->findAll(), true) ?>

<?= get_last_query() ?>
</pre>

<p>
    필요에 따라 쿼리 빌더의 메소드를 추가하여 검색 조건을 지정할 수 있습니다.
</p>
<pre class="prettyprint">
$userModel->where('name', 'test2')->findAll();

<?= print_r($userModel->where('name', 'test2')->findAll(), true) ?>

<?= get_last_query() ?>
</pre>

<p>
    limit 및 offset 값을 각각 첫 번째와 두 번째 매개 변수로 전달할 수 있습니다.
</p>
<pre class="prettyprint">
$userModel->findAll(2, 1);

<?= print_r($userModel->findAll(2, 1), true) ?>

<?= get_last_query() ?>
</pre>

<h2>first()</h2>

<p>
    결과 집합의 첫 번째 행을 반환합니다. 쿼리 빌더와 함께 사용하는 것이 가장 좋습니다.
</p>
<pre class="prettyprint">
$userModel->like('name', 'test')->first();

<?= print_r($userModel->like('name', 'test')->first(), true) ?>

<?= get_last_query() ?>
</pre>