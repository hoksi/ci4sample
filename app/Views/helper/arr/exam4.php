<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>

<p>
    `$data` 배열을 1차원 배열로 변환합니다.<br/>
</p>
<pre class="prettyprint">
$data = <?= print_r($data, true) ?>;

array_flatten_with_dots($data);
=> <?= print_r(array_flatten_with_dots($data), true) ?>
</pre>

<p>
    세 번째 매개변수 `$id`를 사용하면 키에 prefix로 `$id` 값이 추가됩니다.
</p>
<pre class="prettyprint">
array_flatten_with_dots($data, 'foo_');
=> <?= print_r(array_flatten_with_dots($data, 'foo_'), true) ?>
</pre>