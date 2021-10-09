<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<h2>$builder->insert()</h2>

<p>
    제공한 데이터를 기반으로 Insert 문자열을 생성하고 쿼리를 실행합니다.
</p>
<pre class="prettyprint">
$builder->insert([
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
]);

<?= print_r($builder->insert([
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
]), true) ?>

<?= get_last_query() ?>
</pre>

<h2>$builder->ignore()</h2>

<p>
    동일한 기본(primary) 키를 가진 항목이 있으면 데이터가 인서트(insert)되지 않도록 제공한 데이터를 기반으로 인서트 무시 문자열(insert ignore string)을 추가하여 쿼리를 실행합니다.
</p>
<pre class="prettyprint">
$builder->ignore()->insert([
    'idx' => 1,
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
]);

<?= print_r($builder->ignore()->insert([
    'idx' => 1,
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
]), 1) ?>

<?= get_last_query() ?>
</pre>

<h2>$builder->set()</h2>

<p>
    데이터 배열을 직접 Insert로 전달하는 대신 사용합니다.
</p>
<pre class="prettyprint">
$builder->set('name', 'My Name')->insert();

<?= print_r($builder->set('name', 'My Name')->insert(), true) ?>

<?= get_last_query() ?>
</pre>

<p>
    여러번 사용하여도 올바르게 조립됩니다.
</p>
<pre class="prettyprint">
$builder->set('name', 'My Name')
    ->set('title', 'My title')
    ->set('email', 'My email')
    ->insert();

<?= print_r($builder->set('name', 'My Name')
    ->set('title', 'My title')
    ->set('email', 'My email')
    ->insert(), 1) ?>

<?= get_last_query() ?>
</pre>

<p>
    set()의 세 번째 매개 변수 `$escape`의 값을 `false`로 설정하면 데이터가 이스케이프되지 않습니다.
</p>

<pre class="prettyprint">
// false로 설정한 경우
$builder->set('name', 'ABS(100)', false)->insert();

<?= print_r($builder->set('name', 'ABS(100)', false)->insert(), 1) ?>

<?= get_last_query() ?>


// false로 설정하지 않은 경우
$builder->set('name', 'ABS(100)')->insert();

<?= print_r($builder->set('name', 'ABS(100)')->insert(), 1) ?>

<?= get_last_query() ?>
</pre>

<h2>$builder->getCompiledInsert()</h2>

<p>
    $builder->insert()와 같이 Insert 쿼리를 컴파일하지만 쿼리를 실행하지는 않습니다. 이 메소드는 SQL 쿼리를 문자열로 반환합니다.
</p>
<pre class="prettyprint">
echo $builder->->set([
    'idx' => 2,
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
])->getCompiledInsert();

<?= $builder->set([
    'idx' => 2,
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
])->getCompiledInsert() ?>
</pre>

<h2>$builder->insertBatch()</h2>

<p>
    제공한 데이터를 기반으로 Insert 문자열을 생성하고 쿼리를 실행합니다.
</p>
<pre class="prettyprint">
$builder->insertBatch([
    [
        'title' => 'My title',
        'name'  => 'My Name',
        'email'  => 'My email',
    ],
    [
        'title' => 'My title',
        'name'  => 'My Name',
        'email'  => 'My email',
    ],
]);

<?= print_r($builder->insertBatch([
    [
        'title' => 'My title',
        'name'  => 'My Name',
        'email'  => 'My email',
    ],
    [
        'title' => 'My title',
        'name'  => 'My Name',
        'email'  => 'My email',
    ],
]), ) ?>

<?= get_last_query() ?>
</pre>