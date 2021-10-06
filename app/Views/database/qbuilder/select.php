<h2>$builder->get()</h2>
<p>`get()` 함수를 사용하면 SQL SELECT 문을 작성할 수 있습니다.</p>
<p>select 쿼리를 실행하고 결과를 반환하며, 테이블에서 모든 레코드를 검색할 수 있습니다</p>
<pre>
$builder->get()->getResult();

<?= print_r($builder->get()->getResult(), true)?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<p>`limit`과 `offset`을 설정할 수 있습니다.</p>
<pre>
$builder->get(1)->getResult(), true);

<?= print_r($builder->get(1)->getResult(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<pre>
$builder->get(1, 2)->getResult();

<?= print_r($builder->get(1, 2)->getResult(), true) ?>
</pre>

<p>`getResult()` 함수는 $query 라는 변수에 할당되어 있으며 결과를 표시하는데 사용합니다.</p>
<p>결과 생성에 대한 자세한 내용은 <a href="http://ci4doc.cikorea.net/database/results.html" target="_blank">결과(result)</a> 함수 페이지를 참조하십시오.

<h2>$builder->getCompiledSelect()</h2>
<p>이 메소드는 SQL 쿼리를 문자열로 반환합니다.</p>
<pre>
$builder->getCompiledSelect();

<?= $builder->getCompiledSelect() ?>
</pre>

<p>첫 번째 매개 변수를 사용하면 쿼리 빌더의 쿼리를 재설정할지 여부를 설정할 수 있습니다.</p>
<pre>
$builder->limit($limit, $offset)->getCompiledSelect(false);

<?= $builder->limit($limit, $offset)->getCompiledSelect(false) ?>
</pre>

<p>다음 예에서 `limit()`을 지정하지 않아도 사용 가능한 이유는 $builder->get()을 사용하여 쿼리가 실행되지 않았기 때문입니다.</p>
<p>쿼리를 재설정해야 한다면 `$builder->resetQuery()`를 사용하십시오.</p>
<pre>
$builder->select('title, content, date')->getCompiledSelect();

<?= $builder->select('title, content, date')->getCompiledSelect() ?>
</pre>

<h2>$builder->getWhere()</h2>
<p>`where()` 함수를 사용하는 대신 첫 번째 매개 변수에 “where”절을 추가 할 수 있다는 점을 제외하고 `get()` 함수와 동일합니다.</p>
<pre>
$builder->getWhere(['idx' => 1])->getResult();

<?= print_r($builder->getWhere(['idx' => 1])->getResult(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->select()</h2>
<p>쿼리의 SELECT 부분을 쓸 수 있습니다</p>
<pre>
$builder->select('idx, title')->get()->getResult();

<?= print_r($builder->select('idx, title')->get()->getResult(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<p>`$builder->select()`는 두 번째 매개 변수를 옵션으로 허용하며, 이를 `false`로 설정하면 CodeIgniter는 필드 또는 테이블 이름을 보호하지 않습니다.</p>
<p>필드의 자동 이스케이프가 필드를 손상시킬 수 있는 복합 선택문이 필요한 경우에 유용합니다.</p>
<pre>
$builder->select('idx, title, (SELECT SUM(idx) FROM my_table) AS idx_sum', false)->get()->getResult();

<?= print_r($builder->select('idx, title, (SELECT SUM(idx) FROM my_table) AS idx_sum', false)->get()->getResult(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->selectMax()</h2>
<p>쿼리의 SELECT MAX(field) 부분을 작성합니다. 옵션으로 두 번째 매개 변수에 결과 필드의 이름을 전달하여 바꿀 수 있습니다.</p>
<pre>
$builder->selectMax('idx')->get()->getRow();

<?= print_r($builder->selectMax('idx')->get()->getRow(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<pre>
$builder->selectMax('idx', 'max_idx')->get()->getRow();

<?= print_r($builder->selectMax('idx', 'max_idx')->get()->getRow(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->selectMin()</h2>
<p>쿼리의 “SELECT MIN(field)” 부분을 작성합니다. selectMax()와 마찬가지로 결과 필드의 이름을 바꾸는 두 번째 매개 변수를 옵션으로 제공합니다.</p>
<pre>
$builder->selectMin('idx')->get()->getRow();

<?= print_r($builder->selectMin('idx')->get()->getRow(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<pre>
$builder->selectMin('idx', 'min_idx')->get()->getRow();

<?= print_r($builder->selectMin('idx', 'min_idx')->get()->getRow(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->selectAvg()</h2>
<p>쿼리의 “SELECT AVG(field)” 부분을 작성합니다. selectMax()와 마찬가지로 결과 필드의 이름을 바꾸는 두 번째 매개 변수를 옵션으로 제공합니다.</p>
<pre>
$builder->selectAvg('idx')->get()->getRow();

<?= print_r($builder->selectAvg('idx')->get()->getRow(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<pre>
$builder->selectAvg('idx', 'avg_idx')->get()->getRow();

<?= print_r($builder->selectAvg('idx', 'avg_idx')->get()->getRow(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->selectSum()</h2>
<p>쿼리의 “SELECT SUM(field)” 부분을 작성합니다. selectMax()와 마찬가지로 결과 필드의 이름을 바꾸는 두 번째 매개 변수를 옵션으로 제공합니다.</p>
<pre>
$builder->selectSum('idx')->get()->getRow();

<?= print_r($builder->selectSum('idx')->get()->getRow(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<pre>
$builder->selectSum('idx', 'sum_idx')->get()->getRow();

<?= print_r($builder->selectSum('idx', 'sum_idx')->get()->getRow(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->selectCount()</h2>
<p>쿼리의 “SELECT COUNT(field)” 부분을 작성합니다. selectMax()와 마찬가지로 결과 필드의 이름을 바꾸는 두 번째 매개 변수를 옵션으로 제공합니다.</p>
<pre>
$builder->selectCount('idx')->get()->getRow();

<?= print_r($builder->selectCount('idx')->get()->getRow(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<pre>
$builder->selectCount('idx', 'cnt_idx')->get()->getRow();

<?= print_r($builder->selectCount('idx', 'cnt_idx')->get()->getRow(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->from()</h2>
<p>쿼리의 FROM 부분을 작성합니다.</p>
<pre>
$builder->from('news')->get(4)->getResult();

<?= print_r($builder->from('news')->get(4)->getResult(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>
<p style="color:red">앞서 설명한 것처럼 쿼리의 FROM 부분은 $db->table() 함수에서 지정할 수 있습니다. 추가 호출된 `from()`은 쿼리의 FROM 부분에 더 많은 테이블을 추가합니다.</p>

<h2>$builder->join()</h2>
<p>쿼리의 JOIN 부분을 작성합니다. 다음 예는 `my_table`과 `news`를 조인하여 데이터를 조회합니다.</p>
<pre>
$builder->join('news', 'my_table.idx = news.id')->get()->getResult();

<?= print_r($builder->join('news', 'my_table.idx = news.id')->get()->getResult(), true) ?>
</pre>
<p style="color:blue">* Query : <?= $db->getLastQuery() ?></p>