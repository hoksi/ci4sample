<h2>$builder->where()</h2>
<p>이 함수를 사용하면 다섯 가지 방법중 하나를 사용하여 WHERE 절을 설정할 수 있습니다.</p>

<ol>
    <li>key/value 방법

        <pre>$builder->where('idx', 1)->get()->getResult();

<?= print_r($builder->where('idx', 1)->get()->getResult(), true) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

        <p>등호(=)가 추가됩니다.<br>`where()` 함수를 여러번 호출하면 AND와 함께 체인으로 연결됩니다.</p>
        <pre>$builder->where('idx', 1)->where('name', 'test1')->get()->getResult();

<?= print_r($builder->where('idx', 1)->where('name', 'test1')->get()->getResult(), true) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>
    </li>
    <li>사용자 key/value 방법

        <p>비교를 제어하기 위해 첫 번째 매개 변수에 연산자를 포함시킬 수 있습니다</p>
        <pre>$builder->where('name !=', 'test1')->where('idx <', 2)->get()->getResult();

<?= print_r($builder->where('name !=', 'test1')->where('idx <=', 2)->get()->getResult(), true) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>
    </li>
    <li>연관 배열 방법

        <p>이 방법을 사용할 때 사용자 연산자를 포함시킬 수 있습니다.</p>
        <pre>$builder->where(['name' => 'test1', 'idx <' => 3])->get()->getResult();

<?= print_r($builder->where(['name' => 'test1', 'idx <' => 3])->get()->getResult(), true) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>
    </li>
    <li>맞춤 문자열

        <p>비교절을 직접 작성할 수 있습니다.</p>
        <pre>$builder->where("name = 'test2' AND idx <= 3")->get()->getResult();

<?= print_r($builder->where("name = 'test2' AND idx <= 3")->get()->getResult(), true) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

        <p>`$builder->where()`는 세 번째 매개 변수를 옵션으로 허용하며, `false`로 설정하면 필드 또는 테이블 이름을 보호하지 않습니다.</p>
        <pre>$builder->where("name IN ('test1', 'test2')", null, false)->get()->getResult();

<?= print_r($builder->where("name IN ('test1', 'test2')", null, false)->get()->getResult(), true) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>
    </li>
    <li>서브 쿼리

        <p>익명 함수를 사용하여 서브 쿼리를 만들 수 있습니다.</p>
        <pre>$builder->where('idx <', function (\CodeIgniter\Database\BaseBuilder $builder) {
    return $builder->selectMax('idx')->from('my_table');
})->get()->getResult();

<?= print_r($builder->where('idx <', function (\CodeIgniter\Database\BaseBuilder $builder) {
    return $builder->selectMax('idx')->from('my_table');
})->get()->getResult()) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>
    </li>
</ol>

<h2>$builder->orWhere()</h2>
<p>이 함수는 여러 인스턴스가 OR로 결합된다는 점을 제외하고 위의 함수와 동일합니다.</p>
<pre>$builder->where('name', 'test2')->orWhere('name', 'test3')->get()->getResult();

<?= print_r($builder->where('name', 'test2')->orWhere('name', 'test3')->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->whereIn()</h2>
<p>AND로 결합된 WHERE field IN ('item', 'item') SQL 쿼리를 생성합니다.</p>
<pre>$builder->where('name', 'test2')->whereIn('idx', [1,2])->get()->getResult();

<?= print_r($builder->where('name', 'test2')->whereIn('idx', [1,2])->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<p>배열 대신 서브 쿼리를 사용할 수 있습니다.</p>
<pre>$builder->where('name', 'test2')->whereIn('idx', function (\CodeIgniter\Database\BaseBuilder $builder) {
    return $builder->select('idx')->from('my_table');
})->get()->getResult();

<?= print_r($builder->where('name', 'test2')->whereIn('idx', function (\CodeIgniter\Database\BaseBuilder $builder) {
    return $builder->select('idx')->from('my_table');
})->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->orWhereIn()</h2>
<p>OR로 결합된 WHERE field IN ('item', 'item') SQL 쿼리를 생성합니다.</p>
<pre>$builder->where('name', 'test2')->orWhereIn('idx', [1,2])->get()->getResult();

<?= print_r($builder->where('name', 'test2')->orWhereIn('idx', [1,2])->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<p>배열 대신 서브 쿼리를 사용할 수 있습니다.</p>
<pre>$builder->where('name', 'test2')->orWhereIn('idx', function (\CodeIgniter\Database\BaseBuilder $builder) {
    return $builder->select('idx')->from('my_table')->where('idx <', 1);
})->get()->getResult();

<?= print_r($builder->where('name', 'test2')->orWhereIn('idx', function (\CodeIgniter\Database\BaseBuilder $builder) {
    return $builder->select('idx')->from('my_table')->where('idx <', 1);
})->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->whereNotIn()</h2>
<p>AND로 결합된 WHERE field NOT IN ('item', 'item') SQL 쿼리를 생성합니다.</p>
<pre>$builder->where('name !=', 'test2')->whereNotIn('idx', [1,2])->get()->getResult();

<?= print_r($builder->where('name !=', 'test2')->whereNotIn('idx', [1,2])->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<p>배열 대신 서브 쿼리를 사용할 수 있습니다.</p>
<pre>$builder->where('name !=', 'test2')->whereNotIn('idx', function (\CodeIgniter\Database\BaseBuilder $builder) {
    return $builder->select('idx')->from('my_table')->whereIn('idx', [1,2]);
})->get()->getResult();

<?= print_r($builder->where('name !=', 'test2')->whereNotIn('idx', function (\CodeIgniter\Database\BaseBuilder $builder) {
    return $builder->select('idx')->from('my_table')->whereIn('idx', [1,2]);
})->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->orWhereNotIn()</h2>
<p>OR로 결합된 WHERE field NOT IN ('item', 'item') SQL 쿼리를 생성합니다.</p>
<pre>$builder->where('name !=', 'test2')->orWhereNotIn('idx', [1,2])->get()->getResult();

<?= print_r($builder->where('name !=', 'test2')->orWhereNotIn('idx', [1,2])->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<p>배열 대신 서브 쿼리를 사용할 수 있습니다.</p>
<pre>$builder->where('name !=', 'test2')->orWhereNotIn('idx', function (\CodeIgniter\Database\BaseBuilder $builder) {
    return $builder->select('idx')->from('my_table')->whereIn('idx', [1,2]);
})->get()->getResult();

<?= print_r($builder->where('name !=', 'test2')->orWhereNotIn('idx', function (\CodeIgniter\Database\BaseBuilder $builder) {
    return $builder->select('idx')->from('my_table')->whereIn('idx', [1,2]);
})->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>