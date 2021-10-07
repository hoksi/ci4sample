<h2>$builder->limit()</h2>

<p>
    쿼리에서 반환하려는 행 수를 제한할 수 있습니다.
</p>
<pre>$builder->limit(2)->get()->getResult();

<?= print_r($builder->limit(1)->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<p>
    두 번째 매개 변수를 사용하면 결과 오프셋을 설정할 수 있습니다.
</p>
<pre>$builder->limit(2, 2)->get()->getResult();

<?= print_r($builder->limit(1, 2)->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->countAllResults()</h2>

<p>
    쿼리 빌더를 통해 조건에 맞는 행의 갯수를 반환합니다. `where()`, `orWhere()`, `like()`, `orLike()`등과 같은 쿼리 빌더 메소드를 허용합니다.
</p>
<pre>$builder->countAllResults();

<?= print_r($builder->countAllResults(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<pre>$builder->like('title', 3)->countAllResults();

<?= print_r($builder->like('title', 3)->countAllResults(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<p>
    이 메소드는 `select()`로 전달한 모든 필드 값을 재 설정합니다.
</p>

<pre>$builder->select('name')->like('title', 3)->countAllResults();

<?= print_r($builder->select('name')->like('title', 3)->countAllResults(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->countAll()</h2>

<p>
    특정 테이블의 모든 행의 갯수를 반환니다.
</p>
<pre>$builder->countAll();

<?= print_r($builder->countAll(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<p>
    countAllResult() 메소드와 같이 select()로 전달한 모든 필드 값을 재설정합니다.
</p>
<pre>$builder->select('name')->like('title', 3)->countAll();

<?= print_r($builder->select('name')->like('title', 3)->countAll(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>
