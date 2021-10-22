<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>

<p>
    이 샘플은 API Response Trait의 응답을 얻기위해 <a href="/library/curl" target="_blank">CURLRequest</a> 라이브러리를 사용합니다.<br/>
</p>
<pre class="prettyprint">
// user 생성
$response = $client->post('/response/api/exam1/createUser', [
    'form_params' => [
        'name' => 'test',
        'email' => 'test@test.com',
    ]
]);

$createResult = $response->getBody();

* 결과 : <?= $createResult ?>
</pre>

<pre class="prettyprint">
// user 조회
$response = $client->post('/response/api/exam1/getUser', [
    'form_params' => json_decode($createResult, true)
]);

$userInfo = $response->getBody();

* 결과 : <?= $userInfo ?>
</pre>

<pre class="prettyprint">
// user 수정
$userData = json_decode($userInfo, true);
$userData['title'] = 'test-title';
$response = $client->post('/response/api/exam1/updateUser', [
    'form_params' => $userData
]);

$updateResult = $response->getBody();

* 결과 : <?= $updateResult ?>

* userInfo : <?= $updateUserInfo ?>
</pre>

<pre class="prettyprint">
// user 삭제
$response = $client->post('/response/api/exam1/updateUser', [
    'form_params' => $userData
]);

$deleteResult = $response->getBody();

* 결과 : <?= $deleteResult ?>
</pre>

<?= $this->endSection() ?>