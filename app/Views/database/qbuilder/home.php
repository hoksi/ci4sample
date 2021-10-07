<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <p>CodeIgniter를 사용하면 쿼리 빌더 클래스에 액세스 할 수 있습니다. 이 클래스를 사용하면 최소한의 스크립팅으로 데이터베이스에서 정보를 검색, 삽입 및 업데이트를 할 수 있습니다.</p>
            <p>경우에 따라 데이터베이스 작업을 수행하는데 한두 줄의 코드만 사용해도 됩니다. CodeIgniter에서는 데이터베이스의 각 테이블이 클래스 파일일 필요는 없으며. 더 간단한 인터페이스를 제공합니다.</p>
            <p>단순성을 넘어서, Query Builder 기능을 사용하면 각 데이터베이스 어댑터별 조회 구문이 생성되어 특정 데이터베이스에 종속되지 않는 어플리케이션을 작성할 수 있습니다.</p>
            <p>쿼리 빌더에 전달되는 값은 시스템에 의해 자동으로 이스케이프되므로 SQL 주입에 보다 안전한 쿼리가 가능합니다.</p>
            
            <h2>쿼리 빌더 로드</h2>

            <p>쿼리 빌더는 데이터베이스 연결의 table() 메소드를 통해 로드됩니다. 그러면 쿼리의 FROM 부분이 설정되고 Query Builder 클래스의 새 인스턴스가 반환됩니다.</p>
            <p>Query Builder는 특별히 클래스를 요청할 때만 메모리에 로드되므로 기본적으로 자원(resource)이 사용되지 않습니다.</p>
            <pre>$db      = \Config\Database::connect();
$builder = $db->table('users');</pre>

            <h2>데이터 선택(select)</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'SelectShow',
                'title' => '/database/qbuilder/select',
                'href' => '/database/qbuilder/select',
            ],
            [
                'id' => 'Select',
                'title' => 'Select.php',
                'href' => '/sample/home/view/Controllers/Database/Qbuilder/Select',
            ],
            [
                'id' => 'SelectView',
                'title' => 'select.php',
                'href' => '/sample/home/view/Views/database/qbuilder/select',
            ],
        ]) ?>
            
        <?= tabler_card_start() ?>
            <h2>특정 데이터 찾기</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'WhereShow',
                'title' => '/database/qbuilder/where',
                'href' => '/database/qbuilder/where',
            ],
            [
                'id' => 'Where',
                'title' => 'Where.php',
                'href' => '/sample/home/view/Controllers/Database/Qbuilder/Where',
            ],
            [
                'id' => 'WhereView',
                'title' => 'where.php',
                'href' => '/sample/home/view/Views/database/qbuilder/where',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>유사한 데이터 찾기</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'LikeShow',
                'title' => '/database/qbuilder/like',
                'href' => '/database/qbuilder/like',
            ],
            [
                'id' => 'Like',
                'title' => 'Like.php',
                'href' => '/sample/home/view/Controllers/Database/Qbuilder/Like',
            ],
            [
                'id' => 'LikeView',
                'title' => 'like.php',
                'href' => '/sample/home/view/Views/database/qbuilder/like',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>결과 정렬</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'OrderbyShow',
                'title' => '/database/qbuilder/orderby',
                'href' => '/database/qbuilder/orderby',
            ],
            [
                'id' => 'Orderby',
                'title' => 'Orderby.php',
                'href' => '/sample/home/view/Controllers/Database/Qbuilder/Orderby',
            ],
            [
                'id' => 'OrderbyView',
                'title' => 'orderby.php',
                'href' => '/sample/home/view/Views/database/qbuilder/orderby',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>결과 제한(Limit) 또는 카운팅(Counting)</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'LimitShow',
                'title' => '/database/qbuilder/limit',
                'href' => '/database/qbuilder/limit',
            ],
            [
                'id' => 'Limit',
                'title' => 'Limit.php',
                'href' => '/sample/home/view/Controllers/Database/Qbuilder/Limit',
            ],
            [
                'id' => 'LimitView',
                'title' => 'limit.php',
                'href' => '/sample/home/view/Views/database/qbuilder/limit',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>쿼리 그룹화</h2>

            <p>쿼리 그룹화를 사용하면 WHERE절을 괄호로 묶어 그룹을 만들 수 있습니다. 이를 이용하여 복잡한 WHERE절을 쿼리로 만들 수 있습니다. 그룹은 중첩 가능합니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'QgroupShow',
                'title' => '/database/qbuilder/qgroup',
                'href' => '/database/qbuilder/qgroup',
            ],
            [
                'id' => 'Qgroup',
                'title' => 'Qgroup.php',
                'href' => '/sample/home/view/Controllers/Database/Qbuilder/Qgroup',
            ],
            [
                'id' => 'QgroupView',
                'title' => 'qgroup.php',
                'href' => '/sample/home/view/Views/database/qbuilder/qgroup',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>Inserting 데이타</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'InsertShow',
                'title' => '/database/qbuilder/insert',
                'href' => '/database/qbuilder/insert',
            ],
            [
                'id' => 'Insert',
                'title' => 'Insert.php',
                'href' => '/sample/home/view/Controllers/Database/Qbuilder/Insert',
            ],
            [
                'id' => 'InsertView',
                'title' => 'insert.php',
                'href' => '/sample/home/view/Views/database/qbuilder/insert',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>Updating 데이타</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'UpdateShow',
                'title' => '/database/qbuilder/update',
                'href' => '/database/qbuilder/update',
            ],
            [
                'id' => 'Update',
                'title' => 'Update.php',
                'href' => '/sample/home/view/Controllers/Database/Qbuilder/Update',
            ],
            [
                'id' => 'UpdateView',
                'title' => 'update.php',
                'href' => '/sample/home/view/Views/database/qbuilder/update',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>데이터 삭제(Deleting)</h2>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'DeleteShow',
                'title' => '/database/qbuilder/delete',
                'href' => '/database/qbuilder/delete',
            ],
            [
                'id' => 'Delete',
                'title' => 'Delete.php',
                'href' => '/sample/home/view/Controllers/Database/Qbuilder/Delete',
            ],
            [
                'id' => 'DeleteView',
                'title' => 'update.php',
                'href' => '/sample/home/view/Views/database/qbuilder/delete',
            ],
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>