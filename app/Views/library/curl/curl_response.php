<?php $response = $client->request('GET', 'https://www.google.com/search', ['q' => 'codeigniter']); ?>

<h2>getStatusCode()</h2>
<p>
    서버의 상태를 확인할 수 있습니다.
</p>
<pre class="prettyprint">
echo $response->getStatusCode(); // <?= $response->getStatusCode() ?>

echo $response->getHeader('Content-Type'); // <?= $response->getHeader('Content-Type') ?></pre>

<h2>getHeaderLine()</h2>
<p>
    응답에서 헤더를 검색할 수 있습니다
</p>
<pre class="prettyprint">
echo $response->getHeaderLine('Content-Type'); // <?= $response->getHeaderLine('Content-Type') ?>
</pre>

<h2>getHeaders()</h2>
<p>
    헤더를 통해 전달되는 모든 데이터를 반환합니다.
</p>
<pre class="prettyprint">
foreach ($response->getHeaders() as $name => $value) {
    echo $name .': '. $response->getHeaderLine($name) ."\n";
}</pre>
<pre class="prettyprint">
<?php
    foreach ($response->getHeaders() as $name => $value) {
        echo $name .': '. $response->getHeaderLine($name) ."\n";
    }
?>
</pre>

<h2>getBody()</h2>
<p>
    HTML 본문을 반환 합니다.
</p>
<pre class="prettyprint">echo $response->getBody();</pre>

<pre class="prettyprint"><?= trim(htmlspecialchars($response->getBody())) ?></pre>