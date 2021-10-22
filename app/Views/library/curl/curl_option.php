<h2>allow_redirects</h2>
<p>
    `Location` 헤더에 따른 리디렉션 처리 방법을 설정합니다.(`true` or `false`);
</p>
<pre class="prettyprint">
// false로 설정하면 리디렉션 처리하지 않습니다.
$client->request('GET', 'http://example.com', ['allow_redirects' => false]);

// true로 설정하면 리디렉션 처리 합니다.
$client->request('GET', 'http://example.com', ['allow_redirects' => true]);
</pre>

<h2>auth</h2>
<p>
    HTTP Basic과 Digest 인증에 대한 인증 정보를 제공합니다.
</p>
<pre class="prettyprint">
// HTTP Basic 인증 정보 설정
$client->request('GET', 'http://example.com', ['auth' => ['username', 'password', 'basic']]);

// Digest 인증 인증 정보 설정
$client->request('GET', 'http://example.com', ['auth' => ['username', 'password', 'digest']]);
</pre>

<h2>body</h2>
<p>
    PUT, POST, DELETE, PATCH 요청에 대한 요청 본문을 설정합니다.
</p>
<pre class="prettyprint">
$body = json_encode(['username' => 'username', 'password' => 'password']);

// 요청 본문을 설정(Guzzle API 호환)
$client->request('PUT', 'http://example.com', ['body' => $body]);

// setBody() 메소드 사용하여 설정
$client->setBody($body)->request('PUT', 'http://example.com');
</pre>

<h2>cert</h2>
<p>
    PEM 형식의 클라이언트측 인증서를 설정합니다.
</p>
<pre class="prettyprint">
// 인증서 파일의 경로는 절대경로로 지정합니다.
$client->request('GET', 'http://example.com', ['cert' => ['/path/getServer.pem']);

// 인증서 사용시 비밀번호 사용
$client->request('GET', 'http://example.com', ['cert' => ['/path/getServer.pem', 'password']);
</pre>

<h2>connect_timeout</h2>
<p>
    웹 사이트 연결 시도 제한 시간을 초 단위로 설정합니다.
</p>
<pre class="prettyprint">
// 제한 시간 2분
$response->request('GET', 'http://example.com', ['connect_timeout' => 120]);

// 제한 시간 없음
$response->request('GET', 'http://example.com', ['connect_timeout' => 0]);
</pre>

<h2>cookie</h2>
<p>
    웹 사이트의 쿠키를 읽고, 저장할 때 사용할 파일 이름을 설정합니다.
</p>
<pre class="prettyprint">
// 쿠키 파일의 경로는 절대 경로로 지정합니다.
$response->request('GET', 'http://example.com', ['cookie' => WRITEPATH . 'CookieSaver.txt']);
</pre>

<h2>debug</h2>
<p>
    디버깅 내용을 STDOUT으로 출력 여부를 설정합니다.
</p>
<pre class="prettyprint">
// 디버깅 내용을 STDOUT으로 출력
$response->request('GET', 'http://example.com', ['debug' => true]);

// 디버깅 내용을 서버 오류 로그에 기록
$response->request('GET', 'http://example.com', ['debug' => false]);

// 디버깅 내용을 `/usr/local/curl_log.txt`에 기록
$response->request('GET', 'http://example.com', ['debug' => '/usr/local/curl_log.txt']);
</pre>

<h2>delay</h2>
<p>
    설정시 요청을 보내기 전에 일시 중지할 수 있습니다.
</p>
<pre class="prettyprint">
// 2초 일시 정지
$response->request('GET', 'http://example.com', ['delay' => 2000]);
</pre>

<h2>form_params</h2>
<p>
     POST 요청에 대해 `application/x-www-form-urlencoded` 방식으로 폼(form) 데이터를 보냅니다.
</p>
<pre class="prettyprint">
$client->request('POST', 'http://example.com', [
        'form_params' => [
                'foo' => 'bar',
                'baz' => ['hi', 'there'],
        ],
]);
</pre>

<h2>headers</h2>
<p>
     요청에 필요한 헤더를 설정합니다.
</p>
<pre class="prettyprint">
$client->request('POST', 'http://example.com', [
        'headers' => [
                'User-Agent' => 'testing/1.0',
                'Accept'     => 'application/json',
                'X-Foo'      => ['Bar', 'Baz'],
        ],
]);
</pre>

<h2>http_errors</h2>
<p>
     오류 내용을 반환 여부를 설정합니다.
</p>
<pre class="prettyprint">
// HTTP 코드가 400 이상이면 오류를 내고 프로그램을 멈춥니다.
$client->request('GET', 'http://example.com');

// 오류 내용을 반환합니다.
$res = $client->request('GET', 'http://example.com', ['http_errors' => false]);
echo $res->getStatusCode(); // 500
</pre>

<h2>json</h2>
<p>
     요청 본문을 JSON으로 인코딩하여 전송합니다.
</p>
<pre class="prettyprint">
$response = $client->request('PUT', 'http://example.com', ['json' => ['foo' => 'bar']]);
</pre>

<h2>multipart</h2>
<p>
      `CURLFile` 인스턴스로 전달된 파일을 POST 요청을 통해 업로드합니다.<br/>
      `multipart`는 `form_params` 옵션과 함께 사용할 수 없습니다.
</p>
<pre class="prettyprint">
$response = $client->request('POST', 'http://example.com/upload', [
        'foo'      => 'bar',
        'userfile' => new \CURLFile('/path/to/file.txt'),
]);
</pre>

<h2>query</h2>
<p>
      GET과 함께 전송할 쿼리 문자열을 설정합니다.
</p>
<pre class="prettyprint">
$response = $client->request('GET', 'http://example.com/upload', ['query' => ['foo' => 'bar']]);
</pre>

<h2>timeout</h2>
<p>
      서버의 응답 대기 시간을 설정합니다.
</p>
<pre class="prettyprint">
// 대기 시간을 2분으로 제한
$response->request('GET', 'http://example.com', ['timeout' => 120]);

// 무기한 대기
$response->request('GET', 'http://example.com', ['timeout' => 0]);
</pre>

<h2>user_agent</h2>
<p>
      USER_AGENT를 설정합니다.
</p>
<pre class="prettyprint">
$response->request('GET', 'http://example.com', ['user_agent' => 'CodeIgniter Framework v4']);
</pre>

<h2>verify</h2>
<p>
       SSL 인증서 확인 여부를 설정합니다.
</p>
<pre class="prettyprint">
//  SSL 인증서 확인
$client->request('GET', 'http://example.com', ['verify' => true]);

// SSL 인증서 확인 안함
$client->request('GET', 'http://example.com', ['verify' => false]);

// SSL 이증시 사용할 인증서 지정
$client->request('GET', 'http://example.com', ['verify' => '/path/to/cert.pem']);
</pre>

<h2>version</h2>
<p>
      HTTP 프로토콜 버전을 설정합니다.(일반적으로 1.0, 1.1, 2.0)
</p>
<pre class="prettyprint">
// HTTP/1.0으로 설정
$client->request('GET', 'http://example.com', ['version' => 1.0]);
</pre>