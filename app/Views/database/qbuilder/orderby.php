<h2>$builder->orderBy()</h2>

<p>
    ORDER BY 절을 설정합니다.<br/>
    첫 번째 매개 변수에는 정렬하려는 열(column) 이름이 포함됩니다.<br/>
    두 번째 매개 변수를 사용하면 정렬 방향을 설정할 수 있습니다. 값은 ASC, DESC, RANDOM.
</p>
<pre>$builder->orderBy('title', 'DESC')->get()->getResult();

<?= print_r($builder->orderBy('title', 'DESC')->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<p>
    첫 번째 매개 변수에 사용자 정의 문자열을 전달할 수도 있습니다.
</p>
<pre>$builder->orderBy('title DESC, name ASC')->get()->getResult();

<?= print_r($builder->orderBy('title DESC, name ASC')->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<p>
    여러개의 필드가 필요한 경우 함수를 여러번 호출할 수 있습니다.
</p>
<pre>$builder->orderBy('title', 'DESC')->orderBy('name', 'ASC')->get()->getResult();

<?= print_r($builder->orderBy('title', 'DESC')->orderBy('name', 'ASC')->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

<p>
    방향 옵션을 RANDOM으로 할 때 숫자로 지정하지 않으면 첫 번째 매개 변수가 무시됩니다.
</p>
<pre>$builder->orderBy('title', 'RANDOM')->get()->getResult();

<?= print_r($builder->orderBy('title', 'RANDOM')->get()->getResult(), true) ?></pre>
<p style='color:blue'>* Query : <?= $db->getLastQuery() ?></p>

