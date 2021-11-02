<?= $this->extend('sample/exam_layout') ?>

<?= $this->section('content') ?>
<form action='/ci4lab/lab1/exam1/generate' method='post'>
<table class="table table-vcenter card-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Key</th>
            <th>Value</th>
            <th>비고</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>실행환경</td>
            <td >CI_ENVIRONMENT</td>
            <td class="text-muted" >
                <select name="CI_ENVIRONMENT" id="CI_ENVIRONMENT">
                    <option value="development">development</option>
                    <option value="testing">testing</option>
                    <option value="production">production</option>
                </select>
            </td>
            <td class="text-muted" >
                development : 오류 표시 설정, 추가 개발자 도구 로드<br/>
                testing : 오류 표시 설정 없음, PHPUit 테스트를 위한 특수 조건 내장<br/>
                production : 오류 표시 설정 없음, 추가 개발자 도구 로드 안함
            </td>
        </tr>
        <tr>
            <td>홈페이지 기본 URL</td>
            <td >app.baseURL</td>
            <td class="text-muted" >
                <input type="text" name="app.baseURL" id="app.baseURL" value="" placeholder="http://example.com/" />
            </td>
            <td class="text-muted" >슬래시가 포함된 BASE URL.</td>
        </tr>
        <tr>
            <td>Index File</td>
            <td >app.indexPage</td>
            <td class="text-muted" >
                <select name="app.indexPage" id="app.indexPage">
                    <option value="">없음</option>
                    <option value="index.php">index.php</option>
                </select>
            </td>
            <td class="text-muted" >
                라우팅 URL에 index.php 포함 여부
            </td>
        </tr>
        <tr>
            <td>시간대 설정</td>
            <td >app.appTimezone</td>
            <td class="text-muted" >
                <input type="text" name="app.appTimezone" id="app.appTimezone" value="Asia/Seoul" />
            </td>
            <td class="text-muted" ></td>
        </tr>
        <tr>
            <td>세션 저장소 설정</td>
            <td >app.sessionDriver</td>
            <td class="text-muted" >
                <select name="app.sessionDriver" id="app.sessionDriver">
                    <option value="CodeIgniter\Session\Handlers\FileHandler">files</option>
                    <option value="CodeIgniter\Session\Handlers\DatabaseHandler">database</option>
                    <option value="CodeIgniter\Session\Handlers\MemcachedHandler">memcached</option>
                    <option value="CodeIgniter\Session\Handlers\RedisHandler">redis</option>
                </select>
            </td>
            <td class="text-muted" ></td>
        </tr>
        <tr>
            <td>세션 유효기간 (초)</td>
            <td >app.sessionExpiration</td>
            <td class="text-muted" >
                <input type="text" name="app.sessionExpiration" id="app.sessionExpiration" value="7200" />
            </td>
            <td class="text-muted" ></td>            
        </tr>
        <tr>
            <td>세션 쿠키 이름</td>
            <td >app.sessionCookieName</td>
            <td class="text-muted" >
                <input type="text" name="app.sessionCookieName" id="app.sessionCookieName" value="ci_session" />
            </td>
            <td class="text-muted" ></td>
        </tr>
        <tr>
            <td>세션 쿠키 도메인</td>
            <td >app.cookieDomain</td>
            <td class="text-muted" >
                <input type="text" name="app.cookieDomain" id="app.cookieDomain" value="" />
            </td>
            <td class="text-muted" >쿠키와 설정 공유함</td>
        </tr>
        <tr>
            <td>세션 쿠키 경로</td>
            <td >app.cookiePath</td>
            <td class="text-muted" >
                <input type="text" name="app.cookiePath" id="app.cookiePath" value="/" />
            </td>
            <td class="text-muted" >쿠키와 설정 공유함</td>
        </tr>
        <tr>
            <td>세션 저장 경로</td>
            <td >app.sessionSavePath</td>
            <td class="text-muted" >
                <input type="text" name="app.sessionSavePath" id="app.sessionSavePath" value="null" />
            </td>
            <td class="text-muted" ></td>
        </tr>
        <tr>
            <td>세션 IP 일치 여부</td>
            <td >app.sessionMatchIP</td>
            <td class="text-muted" >
                <select name="app.sessionMatchIP" id="app.sessionMatchIP">
                    <option value="true">true</option>
                    <option value="false">false</option>
            </td>
            <td class="text-muted" ></td>
        </tr>
        <tr>
            <td>세션 업데이트 주기 (초)</td>
            <td >app.sessionTimeToUpdate</td>
            <td class="text-muted" >
                <input type="text" name="app.sessionTimeToUpdate" id="app.sessionTimeToUpdate" value="300" />
            </td>
            <td class="text-muted" ></td>
        </tr>
        <tr>
            <td>세션 데이터 삭제 여부</td>
            <td >app.sessionRegenerateDestroy</td>
            <td class="text-muted" >
                <select name="app.sessionRegenerateDestroy" id="app.sessionRegenerateDestroy">
                    <option value="false">false</option>
                    <option value="true">true</option>
                </select>
            </td>
            <td class="text-muted" >세션 ID 재생성시 이전 세션 데이터 삭제 여부</td>
        </tr>
        <tr>
            <td>DB 유형</td>
            <td >database.default.DBDriver</td>
            <td class="text-muted" >
                <select name="database.default.DBDriver" id="database.default.DBDriver">
                    <option value="MySQLi">MySQL</option>
                    <option value="SQLSRV">MSSQL</option>
                    <option value="Postgre">Postgre</option>
                    <option value="SQLite3">sqlite</option>
                </select>
            </td>
            <td class="text-muted" >
                데이터베이스 연결에 사용되는 유형
            </td>
        </tr>
        <tr>
            <td>DB 호스트</td>
            <td >database.default.hostname</td>
            <td class="text-muted" >
                <input type="text" name="database.default.hostname" id="database.default.hostname" value="" placeholder="localhost" />
            </td>
            <td class="text-muted" >
                데이터베이스 서버의 호스트 이름
            </td>
        </tr>
        <tr>
            <td>DB 포트</td>
            <td >database.default.port</td>
            <td class="text-muted" >
                <input type="text" name="database.default.port" id="database.default.port" value="" placeholder="3306" />
            </td>
            <td class="text-muted" >
                데이터베이스 포트 번호
            </td>
        </tr>
        <tr>
            <td>DB 사용자</td>
            <td >database.default.username</td>
            <td class="text-muted" >
                <input type="text" name="database.default.username" id="database.default.username" value="" placeholder="root" />
            </td>
            <td class="text-muted" >
                데이터베이스 연결에 사용되는 사용자 이름
            </td>
        </tr>
        <tr>
            <td>DB 비밀번호</td>
            <td >database.default.password</td>
            <td class="text-muted" >
                <input type="text" name="database.default.password" id="database.default.password" value="" placeholder="password" />
            </td>
            <td class="text-muted" >
                데이터베이스 연결에 사용되는 비밀번호
            </td>
        </tr>
        <tr>
            <td>DB 이름</td>
            <td >database.default.database</td>
            <td class="text-muted" >
                <input type="text" name="database.default.database" id="database.default.database" value="" placeholder="codeigniter" />
            </td>
            <td class="text-muted" >
                연결하려는 데이터베이스 이름
            </td>
        </tr>
        <tr>
            <td colspan="4">
                <button type='submit'>.env 생성</button>
            </td>
        </tr>
    </tbody>
</table>
</form>
<?= $this->endSection() ?>