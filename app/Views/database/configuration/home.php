<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <h2>.env 파일로 구성</h2>
            
            <p>데이터베이스 설정을 .env 파일에 저장할 수 있습니다.</p>
            <p>`default` 그룹의 설정중 변경된 값만 입력하면 되고, 값은 아래 예의 형식을 따라야 합니다.</p>
            <pre>database.default.username = 'root';
database.default.password = '';
database.default.database = 'ci4'</pre>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'EnvShow',
                'title' => '.env',
                'href' => '/database/configuration/home/env',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <table border="1" class="table">
                <colgroup>
                    <col width="11%" />
                    <col width="89%" />
                </colgroup>
                <thead valign="bottom">
                    <tr class="row-odd"><th class="head">Name Config</th>
                        <th class="head">설명</th>
                    </tr>
                </thead>
                <tbody valign="top">
                    <tr class="row-even"><td><strong>dsn</strong></td>
                        <td>DSN 연결 문자열 (일체형 구성)</td>
                    </tr>
                    <tr class="row-odd"><td><strong>hostname</strong></td>
                        <td>데이터베이스 서버의 호스트 이름, 대부분 ‘localhost’</td>
                    </tr>
                    <tr class="row-even"><td><strong>username</strong></td>
                        <td>데이터베이스에 연결하는데 사용되는 사용자 이름</td>
                    </tr>
                    <tr class="row-odd"><td><strong>password</strong></td>
                        <td>데이터베이스에 연결하는데 사용되는 비밀번호</td>
                    </tr>
                    <tr class="row-even"><td><strong>database</strong></td>
                        <td>연결하려는 데이터베이스의 이름</td>
                    </tr>
                    <tr class="row-odd"><td><strong>DBDriver</strong></td>
                        <td>데이터베이스 유형(MySQLi, Postgre, etc.), 드라이버 이름과 일치해야 합니다.</td>
                    </tr>
                    <tr class="row-even"><td><strong>DBPrefix</strong></td>
                        <td><a class="reference internal" href="http://ci4doc.cikorea.net/database/query_builder.html" target="_blank">쿼리 빌더</a> 쿼리를 실행할 때 테이블 이름에 추가될 선택적 테이블 접두사, 이를 통해 설치된 여러개의 CodeIgniter가 하나의 데이터베이스를 공유할 수 있습니다.</td>
                    </tr>
                    <tr class="row-odd"><td><strong>pConnect</strong></td>
                        <td>true/false (boolean) - 지속적 연결 사용 여부</td>
                    </tr>
                    <tr class="row-even"><td><strong>DBDebug</strong></td>
                        <td>true/false (boolean) - 데이터베이스 오류를 표시해야 하는지 여부</td>
                    </tr>
                    <tr class="row-odd"><td><strong>charset</strong></td>
                        <td>데이터베이스와 통신하는 데 사용되는 문자 세트(character set)</td>
                    </tr>
                    <tr class="row-even"><td><strong>DBCollat</strong></td>
                        <td>데이터베이스와의 통신에 사용되는 문자 조합(character collation) : ‘MySQLi’ 드라이버에서만 사용</td>
                    </tr>
                    <tr class="row-odd"><td><strong>swapPre</strong></td>
                        <td>dbprefix와 교체(swap)되는 기본 테이블 접두사. 수동으로 작성된 쿼리를 실행할 수 있고, 최종 사용자가 여전히 접두사를 사용자 정의할 수 있어야 하는 분산 어플리케이션에 유용합니다.</td>
                    </tr>
                    <tr class="row-even"><td><strong>schema</strong></td>
                        <td>데이터베이스 스키마, 기본값은 드라이버에 따라 다릅니다. PostgreSQL 및 SQLSRV 드라이버에서 사용합니다.</td>
                    </tr>
                    <tr class="row-odd"><td><strong>encrypt</strong></td>
                        <td><blockquote class="first">
                                <div>암호화 된 연결을 사용할지 여부.</div></blockquote>
                            <ul class="last">
                                <li><p class="first">‘sqlsrv’과 ‘pdo/sqlsrv’ 드라이버는 true/false</p>
                                </li>
                                <li><p class="first">‘MySQLi’관 ‘pdo/mysql’ 드라이버는 다음 옵션 배열로 설정:</p>
                                    <blockquote>
                                        <div><ul class="simple">
                                                <li>‘ssl_key’    - 개인키 파일의 경로</li>
                                                <li>‘ssl_cert’   - 공개키 인증서 파일의 경로</li>
                                                <li>‘ssl_ca’     - 인증 기관 파일의 경로</li>
                                                <li>‘ssl_capath’ - PEM 형식의 신뢰할 수 있는 CA 인증서가 포함된 디렉토리 경로</li>
                                                <li>‘ssl_cipher’ - 암호화에 사용될 <em>허용</em> 암호 목록, 콜론(‘:’)으로 구분</li>
                                                <li>‘ssl_verify’ - true/false; 서버 인증서를 확인할지 여부 (‘MySQLi’ 전용)</li>
                                            </ul>
                                        </div></blockquote>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    <tr class="row-even"><td><strong>compress</strong></td>
                        <td>클라이언트 압축 사용 여부 (MySQL 전용).</td>
                    </tr>
                    <tr class="row-odd"><td><strong>strictOn</strong></td>
                        <td>true/false (boolean) - “엄격 모드” 연결을 강제 적용할지 여부, 어플리케이션을 개발하는 동안 엄격한 SQL을 보장하는데 좋습니다.</td>
                    </tr>
                    <tr class="row-even"><td><strong>port</strong></td>
                        <td><p class="first">데이터베이스 포트 번호, 이 값을 사용하려면 데이터베이스 구성 배열에 아래 행을 추가해야합니다.</p>
                            <pre style="php"><span class="nv">$default</span><span class="p">[</span><span class="s1">&#39;port&#39;</span><span class="p">]</span> <span class="o">=</span> <span class="mi">5432</span><span class="p">;</span></pre>
                        </td>
                    </tr>
                </tbody>
            </table>
        <?=tabler_card_end() ?>
    </div>
</div>
<?= $this->endSection() ?>