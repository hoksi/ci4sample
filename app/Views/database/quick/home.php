<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <h2>데이터베이스 클래스 초기화</h2>
            
            <p>다음 코드는 configuration 설정에 따라 데이터베이스 클래스를 로드하고 초기화합니다.</p>
            <pre>$db = \Config\Database::connect();</pre>

            <p>로드된 클래스는 아래와 같이 사용할 수 있습니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Start',
                'title' => 'Start.php',
                'href' => '/sample/home/view/Controllers/Database/Quick/Start',
            ],
            [
                'id' => 'StartShow',
                'title' => '/database/quick/start',
                'href' => '/database/quick/start',
            ],
            [
                'id' => 'StartResultArrayShow',
                'title' => '/database/quick/start/resultArray',
                'href' => '/database/quick/start/resultArray',
            ],
            [
                'id' => 'StartRowShow',
                'title' => '/database/quick/start/row',
                'href' => '/database/quick/start/row',
            ],
            [
                'id' => 'StartRowArrayShow',
                'title' => '/database/quick/start/rowArray',
                'href' => '/database/quick/start/rowArray',
            ],
            [
                'id' => 'StartInsertShow',
                'title' => '/database/quick/start/insert',
                'href' => '/database/quick/start/insert',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>쿼리 빌더</h2>

            <p><a href="http://ci4doc.cikorea.net/database/query_builder.html" target="_blank">쿼리 빌더(Query Builder)</a>는 데이터를 검색하는 간단한 방법을 제공합니다.</p>
            <p>다음 예는 get() 함수를 이용하여 테이블의 모든 결과를 검색합니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'QueryBuilder',
                'title' => 'QueryBuilder.php',
                'href' => '/sample/home/view/Controllers/Database/Quick/QueryBuilder',
            ],
            [
                'id' => 'QueryBuilderShow',
                'title' => '/database/quick/queryBuilder',
                'href' => '/database/quick/queryBuilder',
            ],
            [
                'id' => 'QueryBuilderInsertShow',
                'title' => '/database/quick/queryBuilder/insert',
                'href' => '/database/quick/queryBuilder/insert',
            ],
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>