<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
<pre class="prettyprint">
$builder->select('*')
    ->groupStart()
        ->like('name', 'test')
        ->orGroupStart()
            ->like('title', '1')
            ->where('name', 'test1')
        ->groupEnd()
    ->groupEnd()
->get()
->getResult();

<?= print_r($builder->select('*')
    ->groupStart()
        ->like('name', 'test')
        ->orGroupStart()
            ->like('title', '1')
            ->where('name', 'test1')
        ->groupEnd()
    ->groupEnd()
->get()
->getResult(), true) ?>

<?= get_last_query() ?>
</pre>

<h2>$builder->groupStart()</h2>
<p>쿼리의 WHERE절에 여는 괄호를 추가하여 새 그룹을 시작합니다.</p>

<h2>$builder->orGroupStart()</h2>
<p>쿼리의 WHERE절에 ‘OR’ 접두사와 함께 여는 괄호를 추가하여 새 그룹을 시작합니다.</p>

<h2>$builder->notGroupStart()</h2>
<p>쿼리의 WHERE절에 ‘NOT’ 접두사와 함께 여는 괄호를 추가하여 새 그룹을 시작합니다.</p>

<h2>$builder->orNotGroupStart()</h2>
<p>쿼리의 WHERE절에 ‘OR NOT’ 접두사와 함께 여는 괄호를 추가하여 새 그룹을 시작합니다.</p>

<h2>$builder->groupEnd()</h2>
<p>쿼리의 WHERE절에 닫는 괄호를 추가하여 현재 그룹을 종료합니다.</p>

<h2>$builder->havingGroupStart()</h2>
<p>쿼리의 HAVING절에 여는 괄호를 추가하여 새 그룹을 시작합니다.</p>

<h2>$builder->orHavingGroupStart()</h2>
<p>쿼리의 HAVING절에 ‘OR’ 접두사와 함께 여는 괄호를 추가하여 새 그룹을 시작합니다.</p>

<h2>$builder->notHavingGroupStart()</h2>
<p>쿼리의 HAVING절에 ‘NOT’ 접두사와 함께 여는 괄호를 추가하여 새 그룹을 시작합니다.</p>

<h2>$builder->orNotHavingGroupStart()</h2>
<p>쿼리의 HAVING절에 ‘OR NOT’ 접두사와 함께 여는 괄호를 추가하여 새 그룹을 시작합니다.</p>

<h2>$builder->havingGroupEnd()</h2>
<p>쿼리의 HAVING절에 닫는 괄호를 추가하여 현재 그룹을 종료합니다.</p>