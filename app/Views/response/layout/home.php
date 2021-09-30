<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <p>CodeIgniter는 간단하지만 매우 유연한 레이아웃 시스템을 지원하며 어플리케이션에서 하나 이상의 레이아웃을 간단하게 사용할 수 있습니다.</p>
            <p>레이아웃은 랜더링되는 모든 뷰에 삽입할 수 있는 컨텐츠 섹션을 지원합니다. 1열, 2열, 블로그 아카이브 페이지 등을 지원하기 위해 다른 레이아웃을 만들 수 있습니다.</p>
            <p>레이아웃은 절대 직접 랜더링되지 않으며, 레이아웃을 지정하여 확장하려는 뷰를 사용할 때 랜더링됩니다.</p>
        <?= tabler_card_end() ?>

        <?= tabler_card_start() ?>
            <h2>레이아웃 만들기</h2>

            <p>레이아웃은 뷰와 같습니다. 뷰와 유일한 차이점은 renderSection() 메소드를 사용한다는 것입니다. 이 메소드는 컨텐츠의 자리 표시자 역할을 합니다.</p>
            <p>renderSection() 메소드에는 섹션 이름이라는 하나의 인수만 있습니다. 이를 통하여 모든 자식 뷰에서 내용 섹션의 이름을 알 수 있습니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'LayoutView',
                'title' => 'myLayout.php',
                'href' => '/sample/home/view/Views/response/layout/myLayout',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>뷰에서 레이아웃 사용</h2>

            <p>뷰를 레이아웃에 삽입하려면 맨 위에 `extend()` 메소드를 사용해야 합니다.</p>
            <p>`extend()` 메소드는 사용하려는 뷰 파일의 이름을 사용합니다. 레이아웃도 표준 뷰이므로 뷰와 같은 위치인 어플리케이션의 View 디렉토리를 확인합니다.</p>
            <p>레이아웃을 확장하는 뷰는 `section($name)`과 `endSection()` 메소드 호출이 포함되어야 합니다. 이러한 호출 사이의 모든 내용은 섹션 이름과 일치하는 renderSection($name) 호출이 있을 경우 레이아웃에 삽입됩니다.</p>
            <p>`endSection()`은 섹션 이름이 필요하지 않으며, 어느 것을 닫아야하는지 자동으로 인식합니다.</p>
            <p>레이아웃 랜더링은 뷰를 컨트롤러내에서 랜더링 하는것처럼 동일하게 수행됩니다.</p>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'MyLayout1',
                'title' => 'MyLayout.php',
                'href' => '/sample/home/view/Controllers/Response/Layout/MyLayout',
            ],
            [
                'id' => 'MyLayoutView1',
                'title' => 'myLayout.php',
                'href' => '/sample/home/view/Views/response/layout/myLayout',
            ],
            [
                'id' => 'MyViewView',
                'title' => 'myView.php',
                'href' => '/sample/home/view/Views/response/layout/myView',
            ],
            [
                'id' => 'MyViewShow',
                'title' => '/response/layout/myLayout',
                'href' => '/response/layout/myLayout',
            ],
            [
                'id' => 'MyScriptView',
                'title' => 'myScript.php',
                'href' => '/sample/home/view/Views/response/layout/myScript',
            ],
            [
                'id' => 'MyScriptShow',
                'title' => '/response/layout/myLayout/script',
                'href' => '/response/layout/myLayout/script',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>부분(Partial) 뷰</h2>

            <p>부분 뷰는 레이아웃을 확장하지 않는 뷰 파일입니다. 여기에는 일반적으로 재사용할 수있는 컨텐츠가 포함됩니다. `$this->include()`를 사용하여 뷰 레이아웃에 부분 뷰를 포함시킬수 있습니다.</p>
        <?=tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'MyLayout2',
                'title' => 'MyLayout.php',
                'href' => '/sample/home/view/Controllers/Response/Layout/MyLayout',
            ],
            [
                'id' => 'MyLayoutView2',
                'title' => 'myLayout.php',
                'href' => '/sample/home/view/Views/response/layout/myLayout',
            ],
            [
                'id' => 'MyPartialView',
                'title' => 'myPartial.php',
                'href' => '/sample/home/view/Views/response/layout/myPartial',
            ],
            [
                'id' => 'sidebarView',
                'title' => 'sidebar.php',
                'href' => '/sample/home/view/Views/response/layout/sidebar',
            ],
            [
                'id' => 'MyPartialShow',
                'title' => '/response/layout/myLayout/partial',
                'href' => '/response/layout/myLayout/partial',
            ],
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>