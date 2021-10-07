<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<h2>$builder->replace()</h2>

<p>
    이 메소드는 PRIMARY 키와 UNIQUE 키를 기준으로 DELETE + INSERT에 대한 SQL 표준인 REPLACE문을 실행합니다.<br />
    이를 이용하여 `select()`, `update()`, `delete()`, `insert()`의 조합으로 구성된 복잡한 로직을 간단하게 구현할 수 있습니다.<br/>
    아래 예에서 idx 필드가 기본 키라고 가정하면 idx 값이 포함된 행은 새 행 데이터로 대체되어 삭제됩니다.<br/>
    `set()` 메소드 사용도 허용되며 `insert()`와 마찬가지로 모든 필드가 자동으로 이스케이프됩니다.
</p>
<pre class="prettyprint">
$builder->replace([
    'idx' => 1,
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
]);

<?= print_r($builder->replace([
    'idx' => 1,
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
]), true) ?>

<?= get_last_query() ?>


$builder->set([
    'idx' => 1,
    'title' => 'My title2',
    'name'  => 'My Name2',
    'email'  => 'My email2',
])->replace();

<?= print_r($builder->set([
    'idx' => 1,
    'title' => 'My title2',
    'name'  => 'My Name2',
    'email'  => 'My email2',
])->replace(), true) ?>

<?= get_last_query() ?>
</pre>

<h2>$builder->update()</h2>

<p>
    업데이트 문자열을 생성하고 제공한 데이터를 기반으로 쿼리를 실행합니다.
</p>
<pre class="prettyprint">
$builder->where('idx',1)->update([
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
]);

<?= print_r($builder->where('idx',1)->update([
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
]), true) ?>

<?= get_last_query() ?>
</pre>

<p>
    WHERE절을 `update()` 함수에 직접 전달할 수 있습니다.
</p>
<pre class="prettyprint">
// 문자열로 전달
$builder->update([
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
], 'idx = 1');

<?= print_r($builder->update([
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
], 'idx = 1'), true) ?>

<?= get_last_query() ?>


// 배열로 전달
$builder->update([
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
], ['idx' => 1]);

<?= print_r($builder->update([
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
], ['idx' => 1]), true) ?>

<?= get_last_query() ?>
</pre>

<h2>$builder->set()</h2>

<p>
    이 기능을 사용하면 Insert처럼 데이터 배열을 직접 Update로 전달할 수 있습니다.
</p>
<pre class="prettyprint">
$builder->set([
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
])->where('idx', 1)->update();

<?= print_r($builder->set([
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
])->where('idx', 1)->update(), true) ?>

<?= get_last_query() ?>
</pre>

<h2>$builder->updateBatch()</h2>

<p>
    update 문자열을 생성하고 제공한 데이터를 기반으로 쿼리를 실행합니다.<br/>
    첫 번째 매개 변수는 값의 연관 배열이고, 두 번째 매개 변수는 where절에 사용할 키입니다.
</p>
<pre class="prettyprint">
$builder->updateBatch([
    [
        'idx' => 1,
        'title' => 'My title',
        'name'  => 'My Name',
        'email'  => 'My email',
    ],
    [
        'idx' => 2,
        'title' => 'My title',
        'name'  => 'My Name',
        'email'  => 'My email',
    ],
], 'idx');

<?= print_r($builder->updateBatch([
    [
        'idx' => 1,
        'title' => 'My title',
        'name'  => 'My Name',
        'email'  => 'My email',
    ],
    [
        'idx' => 2,
        'title' => 'My title',
        'name'  => 'My Name',
        'email'  => 'My email',
    ],
], 'idx'), true) ?>

<?= get_last_query(false) ?>
</pre>

<h2>$builder->getCompiledUpdate()</h2>

<p>
    Update 쿼리를 컴파일하지만 쿼리를 실행하지는 않습니다. 이 메소드는 SQL 쿼리를 문자열로 반환합니다.
</p>
<pre class="prettyprint">
$builder->set([
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
])->where('idx', 1)->getCompiledUpdate();

<?= print_r($builder->set([
    'title' => 'My title',
    'name'  => 'My Name',
    'email'  => 'My email',
])->where('idx', 1)->getCompiledUpdate(), true) ?>
</pre>