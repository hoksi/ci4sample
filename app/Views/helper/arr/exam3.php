<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<p>
    정렬전 `$data` 배열은 다음과 같습니다.<br/>
</p>
<pre class="prettyprint">
$data = <?= print_r($data, true) ?>
</pre>

<p>
    `team.order`와 `position`을 이용하여 `$data` 배열을 정렬합니다.<br/>
    이 메소드는 점 표기법을 지원하지만 와일드카드는 지원하지 않습니다.
</p>
<pre class="prettyprint">
array_sort_by_multiple_keys($data, [
    'team.order' => SORT_ASC,
    'position'   => SORT_ASC,
]);
<?= array_sort_by_multiple_keys($data, [
    'team.order' => SORT_ASC,
    'position'   => SORT_ASC,
]) == false ?>
</pre>

<p>
    `$data` 배열은 먼저‘team’하위 배열의 ‘order’값으로 정렬한 후 ‘position’의 값에 따라 정렬됩니다.<br/>
    결과 배열은 다음과 같습니다.
</p>
<pre class="prettyprint">
<?= print_r($data, true) ?>
</pre>
