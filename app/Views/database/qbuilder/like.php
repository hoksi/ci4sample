<h2>$builder->like()</h2>

<p>이 메소드를 사용하면 검색에 유용한 LIKE절을 생성할 수 있습니다.</p>

<ol>
    <li>key/value 방법
        <pre>$builder->like('title', 2)->get()->getResult();

<?= print_r($builder->like('title', 2)->get()->getResult(), true) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

        <p>메소드 호출을 여러번 하게되면 AND와 함께 체인으로 연결됩니다.</p>
        <pre>$builder->like('title', 2)->like('name', 2)->get()->getResult();

<?= print_r($builder->like('title', 2)->like('name', 2)->get()->getResult(), true) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

        <p>와일드카드(%)의 위치를 제어하려면 옵션으로 지정된 세 번째 인수를 사용합니다. 옵션은 ‘before’, ‘after’, ‘both’(기본값)입니다.</p>
        <pre>$builder->like('title', 2, 'before')->get()->getResult();

<?= print_r($builder->like('title', 2, 'before')->get()->getResult(), true) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

        <pre>$builder->like('title', 't', 'after')->get()->getResult();

<?= print_r($builder->like('title', 't', 'after')->get()->getResult(), true) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

        <pre>$builder->like('title', 2, 'both')->get()->getResult();

<?= print_r($builder->like('title', 2, 'both')->get()->getResult(), true) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>
    </li>
    <li>연관 배열 방법
        <pre>$builder->like(['title' => 2, 'name' => 2])->get()->getResult();

<?= print_r($builder->like(['title' => 2, 'name' => 2])->get()->getResult(), true) ?></pre>
        <p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>
    </li>
</ol>

<h2>$builder->orLike()</h2>
<p>이 메소드는 여러 인스턴스가 OR로 결합된다는 점을 제외하면 `like()`와 동일합니다.</p>
<pre>$builder->like('title', 2)->orLike('name',  2)->get()->getResult();

<?= print_r($builder->like('title', 2)->orLike('name',  3)->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->notLike()</h2>
<p>이 메소드는 NOT LIKE문을 생성한다는 점을 제외하면 `like()`와 동일합니다.</p>
<pre>$builder->notLike('title', 2)->get()->getResult();

<?= print_r($builder->notLike('title', 2)->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->orNotLike()</h2>
<p>이 메소드는 여러 인스턴스가 OR로 결합된다는 점을 제외하면 `notLike()`와 동일합니다.</p>
<pre>$builder->like('name', 2)->orNotLike('title', 2)->get()->getResult();

<?= print_r($builder->like('name', 1)->orNotLike('title', 2)->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->groupBy()</h2>
<p>검색어의 GROUP BY 부분을 작성합니다.</p>
<pre>$builder->select('name, COUNT(*)')->groupBy('name')->get()->getResult();

<?= print_r($builder->select('name, COUNT(*) AS cnt')->groupBy('name')->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<p>여러 값의 배열을 전달할 수도 있습니다.</p>
<pre>$builder->select('name, title, COUNT(*) AS cnt')->groupBy(['name', 'title'])->get()->getResult();

<?= print_r($builder->select('name, title, COUNT(*) AS cnt')->groupBy(['name', 'title'])->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->distinct()</h2>
<p>“DISTINCT” 키워드를 쿼리에 추가합니다.</p>
<pre>$builder->distinct()->get()->getResult();

<?= print_r($builder->distinct()->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<h2>$builder->having()</h2>
<p>쿼리의 HAVING 부분을 작성합니다.</p>
<pre>$builder->select('name, COUNT(*) AS cnt')->groupBy('name')->having('cnt',  1)->get()->getResult();

<?= print_r($builder->select('name, COUNT(*) AS cnt')->groupBy('name')->having('cnt',  1)->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>