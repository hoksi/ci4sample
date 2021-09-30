<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <p>뷰는 단순히 웹 페이지 또는 머리글, 바닥 글, 사이드 바 등과 같은 페이지 조각입니다. 계층별 구성이 필요한 경우 뷰에서 다른 뷰를 포함시킬수 있습니다.</p>
            <p>뷰는 직접 호출할 수 없으며 컨트롤러가 로드해야 합니다. MVC 프레임워크에서는 컨트롤러가 교통경찰 역할을 하며 특정 뷰를 가져올수 있습니다.</p>
            <p><a href="http://ci4doc.cikorea.net/incoming/controllers.html" target="_blank">컨트롤러</a> 페이지를 아직 읽지 않았다면 먼저 읽어보세요.</p>
            <p>다음 예는 Blog 컨트롤러에 사용하여 해당 BlogView 뷰를 연결합니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'BlogView',
                'title' => 'BlogView.php',
                'href' => '/sample/home/view/Views/response/view/BlogView',
            ],
            [
                'id' => 'Blog',
                'title' => 'Blog.php',
                'href' => '/sample/home/view/Controllers/Response/View/Blog',
            ],
            [
                'id' => 'BlogViewShow',
                'title' => '/response/view/blog',
                'href' => '/response/view/blog',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>다중(Multiple) 뷰 로드</h2>

            <p>CodeIgniter는 컨트롤러에서 view()를 여러 호출하여도 똑똑하게 처리합니다. 둘 이상의 호출이 발생하면 출력에 추가됩니다.</p>
            <p>다음 예는 header, menu, content, footer 뷰를 조합하여 출력합니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Page',
                'title' => 'Page.php',
                'href' => '/sample/home/view/Controllers/Response/View/Page',
            ],
            [
                'id' => 'PageShow',
                'title' => '/response/view/page',
                'href' => '/response/view/page',
            ],
            [
                'id' => 'PageHeader',
                'title' => 'header.php',
                'href' => '/sample/home/view/Views/response/view/header',
            ],
            [
                'id' => 'PageMenu',
                'title' => 'menu.php',
                'href' => '/sample/home/view/Views/response/view/menu',
            ],
            [
                'id' => 'PageContent',
                'title' => 'content.php',
                'href' => '/sample/home/view/Views/response/view/content',
            ],
            [
                'id' => 'PageFooter',
                'title' => 'footer.php',
                'href' => '/sample/home/view/Views/response/view/footer',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>뷰 캐싱</h2>

            <p>view 명령의 세 번째 매개 변수에 cache 옵션을 전달하여 뷰를 캐시(cache)할 수 있으며 뷰 파일과 동일한 이름을 사용하여 캐시됩니다.</p>
            <p>`cache_name` 옵션과 사용하려는 캐시 ID를 전달하면 이를 바꿀수 있습니다.</p>

        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Cache',
                'title' => 'Cache.php',
                'href' => '/sample/home/view/Controllers/Response/View/Cache',
            ],
            [
                'id' => 'CacheShow',
                'title' => '/response/view/cache',
                'href' => '/response/view/cache',
            ],
            [
                'id' => 'CacheView',
                'title' => 'cache.php',
                'href' => '/sample/home/view/Views/response/view/cache',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>뷰에 동적 데이터 추가</h2>

            <p>뷰 함수의 두 번째 매개 변수에 배열을 통해 컨트롤러에서 뷰로 데이터를 전달할 수 있습니다</p>
            <p>전달된 데이터는 호출된 view에 대해 한 번만 사용 가능합니다. 단일 요청에서 view 함수를 여러번 호출한다면 각 뷰 호출에 데이터를 전달해야 합니다.</p>
            <p>이렇게 하면 모든 데이터가 다른 뷰로 “전달”되지 않아 문제가 발생할 수 있습니다. view 함수의 세 번째 매개 변수 $option 배열에 saveData 옵션을 사용하여 데이터를 유지할 수 있습니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Data',
                'title' => 'Data.php',
                'href' => '/sample/home/view/Controllers/Response/View/Data',
            ],
            [
                'id' => 'DataShow',
                'title' => '/response/view/data',
                'href' => '/response/view/data',
            ],
            [
                'id' => 'saveDataShow',
                'title' => '/response/view/data/saveData',
                'href' => '/response/view/data/saveData',
            ],
            [
                'id' => 'DataView',
                'title' => 'data.php',
                'href' => '/sample/home/view/Views/response/view/data',
            ],
            [
                'id' => 'saveDataView',
                'title' => 'saveData.php',
                'href' => '/sample/home/view/Views/response/view/saveData',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>루프(Loop) 만들기</h2>

            <p>뷰 파일에 전달하는 데이터 배열은 단순한 변수로 제한되지 않습니다. 이를 위해 Codeigniter는 다차원 배열을 뷰에 전달할 수 있으며, 여러 행을 생성하기 위해 반복될 수 있습니다.</p>
            <p>좋은 예로 데이터베이스에서 데이터를 가져오면 일반적으로 다차원 배열로 구성 됩니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Loop',
                'title' => 'Loop.php',
                'href' => '/sample/home/view/Controllers/Response/View/Loop',
            ],
            [
                'id' => 'LoopShow',
                'title' => '/response/view/loop',
                'href' => '/response/view/loop',
            ],
            [
                'id' => 'LoopView',
                'title' => 'loop.php',
                'href' => '/sample/home/view/Views/response/view/loop',
            ],
        ]) ?>
    </div>
</div>
<?= $this->endSection() ?>