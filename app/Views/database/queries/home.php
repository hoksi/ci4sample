<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <h2>기본 쿼리</h2>

            <p>쿼리를 제출하려면 query 함수를 사용하십시오.</p>
            <pre>$db->query('YOUR QUERY HERE');</pre>

            <p>`query() 함수는 “읽기” 유형의 쿼리가 실행될 때 데이터베이스 결과 object를 반환합니다. 데이터를 검색할 때 일반적으로 다음과 같이 고유 변수에 쿼리를 할당합니다</p>
            <p> “쓰기(insert, update, delete)” 유형의 쿼리가 실행되면 성공 또는 실패에 따라 `true` 또는 `false`만 반환합니다.</p>
            <pre>$query = $db->query('YOUR QUERY HERE');</pre>

        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Basic',
                'title' => 'Basic.php',
                'href' => '/sample/home/view/Controllers/Database/Queries/Basic',
            ],
            [
                'id' => 'BasicShow',
                'title' => '/database/queries/basic',
                'href' => '/database/queries/basic',
            ],
            [
                'id' => 'BasicWriteShow',
                'title' => '/database/queries/basic/write',
                'href' => '/database/queries/basic/write',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>데이터베이스 접두사(prefix) 수동 작업</h2>

            <p>데이터베이스 접두사를 구성하고 네이티브 SQL 쿼리에 사용하기 위해 테이블 이름 앞에 접두사를 추가하고 싶다면 다음과 같이 하십시오.</p>
            <pre>$db->prefixTable('tablename');</pre>

            <p>새로운 연결을 만들지 않고 프로그래밍 방식으로 접두사를 변경하려면 다음 메소드를 사용할 수 있습니다</p>
            <pre>$db->setPrefix('newprefix_');
$db->prefixTable('tablename');</pre>

            <p>다음 메소드로 언제든지 현재 사용중인 접두사를 얻을 수 있습니다</p>
            <pre>$DBPrefix = $db->getPrefix();</pre>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Prefix',
                'title' => 'Prefix.php',
                'href' => '/sample/home/view/Controllers/Database/Queries/Prefix',
            ],
            [
                'id' => 'PrefixShow',
                'title' => '/database/queries/prefix',
                'href' => '/database/queries/prefix',
            ],            
            [
                'id' => 'PrefixSetPrefixShow',
                'title' => '/database/queries/prefix/setPrefix',
                'href' => '/database/queries/prefix/setPrefix',
            ],
            [
                'id' => 'PrefixGetPrefixShow',
                'title' => '/database/queries/prefix/getPrefix',
                'href' => '/database/queries/prefix/getPrefix',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>식별자 보호</h2>

            <p>데이터베이스의 테이블명과 필드명은 보호하는 것이 좋습니다.(예 : MySQL의 백틱) 쿼리 빌더의 쿼리는 자동으로 보호되지만 식별자를 수동으로 보호해야 하는 경우 다음 메소드를 사용하십시오.</p>
            <pre>$db->protectIdentifiers('table_name');</pre>
            <p>이 함수는 또한 데이터베이스 구성 파일에 접두사가 지정되어 있으면 지정된 접두사를 테이블에 추가할 수 있습니다. 접두사 세트를 활성화하려면 두 번째 매개 변수에 `true`를 전달하십시오.</p>
            <pre>$db->protectIdentifiers('table_name', true);</pre>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Identifier',
                'title' => 'Identifier.php',
                'href' => '/sample/home/view/Controllers/Database/Queries/Identifier',
            ],
            [
                'id' => 'IdentifierShow',
                'title' => '/database/queries/identifier',
                'href' => '/database/queries/identifier',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>이스케이프 쿼리</h2>

            <p>데이터베이스에 데이터를 제출하기 전에 데이터를 이스케이프 처리하는 것이 좋습니다. CodeIgniter에는 이를 수행하는 데 도움이 되는 세 가지 메소드가 있습니다</p>
            <ol>
                <li>`$db->escape()` 메소드는 문자열 데이터만 이스케이프할 수 있도록 데이터 유형을 결정합니다. 또한 데이터 주위에 작은 따옴표를 자동으로 추가하므로 별도의 추가 작업이 필요하지 않습니다.</li>
                <li>`$db->escapeString()` 메소드는 유형에 관계없이 전달된 데이터를 이스케이프합니다. 대부분 이 함수보다는 `$db->escape()`을 사용합니다.</li>
                <li>`$db->escapeLikeString()` 함수는 문자열에서 LIKE 와일드 카드(‘%’, ‘_’)도 올바르게 이스케이프합니다. LIKE 조건에서 문자열을 사용하는 경우 이 메소드를 사용해야 합니다.</li>
            </ol>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Escape',
                'title' => 'Escape.php',
                'href' => '/sample/home/view/Controllers/Database/Queries/Escape',
            ],
            [
                'id' => 'EscapeShow',
                'title' => '/database/queries/escape',
                'href' => '/database/queries/escape',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>쿼리 바인딩</h2>

            <p>바인딩을 사용하면 시스템에서 쿼리를 조합하여 쿼리 구문을 단순화할 수 있습니다.</p>
            <p>쿼리의 물음표는 쿼리 함수의 두 번째 매개 변수 배열의 값으로 자동 대체됩니다.</p>
            <p>바인드 사용시 두 번째 이점은 쿼리에 전달되는 값을 수동으로 이스케이프하지 않아도 엔진이 자동으로 이스케이프 처리하여 안전한 쿼리를 생성한다는 것입니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Bind',
                'title' => 'Bind.php',
                'href' => '/sample/home/view/Controllers/Database/Queries/Bind',
            ],
            [
                'id' => 'BindShow',
                'title' => '/database/queries/bind',
                'href' => '/database/queries/bind',
            ],
            [
                'id' => 'BindInShow',
                'title' => '/database/queries/bind/in',
                'href' => '/database/queries/bind/in',
            ],
            [
                'id' => 'BindNamedShow',
                'title' => '/database/queries/bind/named',
                'href' => '/database/queries/bind/named',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>준비된(Prepared) 쿼리</h2>

            <p>대부분의 데이터베이스 엔진은 쿼리를 한 번 준비한 다음 새로운 데이터 세트를 사용하여 해당 쿼리를 여러 번 실행할 수 있는 일부 형식의 prepare 명령문을 지원합니다.</p>
            <p>이는 데이터가 쿼리 자체와 다른 형식으로 데이터베이스에 전달되므로 SQL 삽입 가능성(SQL injection)을 제거합니다. 동일한 쿼리를 여러 번 실행해야 할 때도 훨씬 빠릅니다.</p>
            <p>단점으로는 쿼리를 실행하기 위해 데이터베이스를 두 번 호출하기 때문에 모든 쿼리에 준비된 쿼리를 사용하면 성능이 크게 저하 될 수 있습니다.</p>
            <p>Codeigniter의 쿼리 빌더 및 데이터베이스 연결은 전달되는 데이터에 대해 이스케이프를 처리하여 SQL 삽입(SQL injection)에 대해 안전을 확보합니다.</p>
            <p>그러나 상황에 따라 준비된 쿼리를 실행하여 쿼리를 최적화하는 기능이 필요할 때가 있습니다.</p>
            <p>이런 경우에 `prepare()` 메소드로 이를 쉽게 구현할 있습니다. `prepare()` 메소드는 단일 매개 변수로 클로저(Closure)를 입력받아 쿼리 개체를 반환합니다.</p>
            <p>쿼리 객체는 `insert`, `update`, `delete`, `replace`, `get`을 포함하여 “final” 유형 쿼리에 의해 자동으로 `PreparedQuery` 객체를 생성합니다.</p>
            <p>`prepare()` 메소드에 사용되는 쿼리는 실제로 값이 적용되거나 실행되지 않으므로 어떤 값을 넣는지는 중요하지 않습니다.</p>
            <pre>$pQuery = $db->prepare(function ($db)
    {
        return $db->table('user')
            ->insert([
                'name'    => 'x',
                'email'   => 'y',
                'country' => 'US'
            ]);
    });</pre>

            <p>쿼리 빌더를 사용하지 않는 경우 물음표를 사용하여 수동으로 `PreparedQuery` 객체를 만들 수 있습니다.</p>
            <pre>use CodeIgniter\Database\Query;

$pQuery = $db->prepare(function ($db) {
    $sql = "INSERT INTO user (name, email, country) VALUES (?, ?, ?)";

    return (new Query($db))->setQuery($sql);
});</pre>

            <p>데이터베이스 prepare 명령문에 옵션을 전달해야 한다면, 두 번째 매개 변수에 해당 옵션을 배열로 전달할 수 있습니다.</p>
            <pre>use CodeIgniter\Database\Query;

$pQuery = $db->prepare(function ($db) {
    $sql = "INSERT INTO user (name, email, country) VALUES (?, ?, ?)";

    return (new Query($db))->setQuery($sql);
}, $options);</pre>

            <h2>쿼리 실행</h2>
            <p>준비(prepare)된 쿼리가 있으면 `execute()` 메소드를 사용하여 실제로 쿼리를 실행할 수 있습니다.</p>
            <p>전달하는 매개 변수 수는 쿼리의 자리 표시자 수와 일치해야 하며 검색어에 표시되는 순서와 동일한 순서로 전달되어야 합니다.</p>
            <p>실행 결과로 표준 <a href="http://ci4doc.cikorea.net/database/results.html" target="_blank">result set</a>을 반환합니다.
            <pre>$pQuery = $db->prepare(function ($db) {
    return $db->table('user')
              ->insert([
                    'name'    => 'x',
                    'email'   => 'y',
                    'country' => 'US'
              ]);
});

// Collect the Data
$name    = 'John Doe';
$email   = 'j.doe@example.com';
$country = 'US';

// Run the Query
$results = $pQuery->execute($name, $email, $country);</pre>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Prepare',
                'title' => 'Prepare.php',
                'href' => '/sample/home/view/Controllers/Database/Queries/Prepare',
            ],
            [
                'id' => 'PrepareShow',
                'title' => '/database/queries/prepare',
                'href' => '/database/queries/prepare',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
        <?=tabler_card_end() ?>

    </div>
</div>
<?= $this->endSection() ?>