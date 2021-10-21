<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>

<p>
    이 샘플은 API Response Trait의 응답을 얻기위해 <a href="/library/curl" target="_blank">CURLRequest</a> 라이브러리를 사용합니다.<br/>
</p>
<p>
    `respondCreated()` 메소드는 Created’메시지와 함께 HTTP 상태 코드 `201`을 반환합니다.
</p>
<?php
$response = $client->post('/response/api/exam1/createUser', [
    'form_params' => [
        'name' => 'test',
        'email' => 'test@test.com',
    ]
]);
?>

<pre class="prettyprint">
$response = $client->post('/response/api/exam1/createUser', [
    'form_params' => [
        'name' => 'test',
        'email' => 'test@test.com',
    ]
]);

echo $response->getStatusCode(); // <?= $response->getStatusCode() ?>

echo $response->getReasonPhrase(); // <?= $response->getReasonPhrase() ?>

echo $response->getBody(); // <?= print_r(json_decode($response->getBody(), true), true) ?>
</pre>

<?= $this->endSection() ?>