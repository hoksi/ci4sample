<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title('URI 라우팅(Routing)') ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <h2>사용자정의 자리 표시자</h2>

            <p>가독성을 위해 경로(route) 파일에 사용자 정의 자리 표시자를 만들어 사용할 수 있습니다.</p>
        <?= tabler_card_end() ?>

        <?= tabler_iframe_tabs([
            [
                'id' => 'customRoute',
                'title' => 'Routes.php',
                'href' => '/sample/home/view/Config/development/Custom',
            ],
            [
                'id' => 'User',
                'title' => 'User.php',
                'href' => '/sample/home/view/Controllers/Routing/Users',
            ],
            [
                'id' => 'usersShow',
                'title' => '/users/550e8400-e29b-41d4-a716-446655440000',
                'href' => '/users/550e8400-e29b-41d4-a716-446655440000',
            ],
            [
                'id' => 'usersShowError',
                'title' => '/users/111-222-333',
                'href' => '/users/111-222-333',
            ],
        ]) ?>
            
        <?= tabler_card_start() ?>
            <h2>정규식</h2>

            <p>원하는 경우 정규식을 사용하여 라우팅 규칙을 정의할 수 있습니다. 역 참조와 마찬가지로 유효한 정규식이 허용됩니다.</p>
            <p>정규 표현식에 대해 더 배우고 싶은 사람들에게 <a href='https://www.regular-expressions.info/' target='_blank'>regular-expressions.info</a>가 좋은 출발점이 될 수 있습니다.</p>
        <?= tabler_card_end() ?>

        <?= tabler_iframe_tabs([
            [
                'id' => 'RegExRoute',
                'title' => 'Routes.php',
                'href' => '/sample/home/view/Config/development/RegEx',
            ],
            [
                'id' => 'Products',
                'title' => 'Products.php',
                'href' => '/sample/home/view/Controllers/Routing/Products',
            ],
            [
                'id' => 'productsShow',
                'title' => '/products/category/123',
                'href' => '/products/category/123',
            ],
            [
                'id' => 'login',
                'title' => '/login/user_id',
                'href' => '/login/user_id',
            ],
        ]) ?>
            
    </div>
</div>


<?= $this->endSection() ?>

