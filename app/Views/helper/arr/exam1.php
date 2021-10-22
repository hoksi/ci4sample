<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
<p>
    검색 문자열 “foo.buzz.fizz”를 사용하여 ‘fizz’의 값을 찾을 수 있습니다.
</p>
<pre class="prettyprint">
$data = <?= print_r($data, true) ?>


echo dot_array_search('foo.buzz.fizz', $data);
=> <?= dot_array_search('foo.buzz.fizz', $data) ?>

echo dot_array_search('foo.bar.baz', $data);
=> <?= dot_array_search('foo.bar.baz', $data) ?>
</pre>

<p>
    별표(*)를 와일드 카드로 사용하여 세그먼트를 바꿀 수 있습니다.<br/>
    발견되면 모든 하위 노드를 찾을 때까지 검색합니다.<br/>
    값을 모르거나 값에 숫자 색인이 있는 경우에 유용합니다.
</p>
<pre class="prettyprint">
echo dot_array_search('foo.*.baz', $data);
=> <?= dot_array_search('foo.*.baz', $data) ?>
</pre>

<p>
    배열의 키에 점(.)이 있으면 백슬래시(\)를 사용하여 키를 이스케이프할 수 있습니다.
</p>
<pre class="prettyprint">
$dotData = <?= print_r($dotData, true) ?>

echo dot_array_search('foo.bar\.baz', $data);
=> <?= dot_array_search('foo.bar\.baz', $dotData) ?>

echo dot_array_search('foo\.bar.baz', $data);
=> <?= dot_array_search('foo\.bar.baz', $dotData) ?>
</pre>