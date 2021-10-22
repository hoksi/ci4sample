<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
<p>
    검색 문자열을 사용하여 값을 찾을 수 있습니다.
</p>
<pre class="prettyprint">
$data = <?= print_r($data, true) ?>


echo array_deep_search('fizz', $data);
=> <?= array_deep_search('fizz', $data) ?>


echo array_deep_search('bar', $data);
=> <?= print_r(array_deep_search('bar', $data), true) ?>
</pre>
