<?= $this->extend('sample/layout') ?>

<?= $this->section('content') ?>
<div class="page-wrapper">

    <?= tabler_page_title($title) ?>

    <div class="page-body">

        <?= tabler_card_start() ?>
            <p>뷰 셀을 사용하면 컨트롤러 외부에서 생성된 HTML을 삽입할 수 있습니다. 지정된 클래스와 메소드를 호출하기 때문에 유효한 HTML 문자열을 리턴해야 합니다.</p>
            <p>오토로더가 찾을 수 있는 모든 클래스를 이 메소드를 사용하여 호출 가능합니다. 유일한 제한 사항은 클래스가 생성자 매개 변수를 가질 수 없다는 것입니다.</p>
            <p>뷰 셀은 뷰 내에서 사용하기 위한 것이며 코드를 모듈화하는데 큰 도움이 됩니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Blog',
                'title' => 'Blog.php',
                'href' => '/sample/home/view/Controllers/Response/Cell/Blog',
            ],
            [
                'id' => 'BlogView',
                'title' => 'blog.php',
                'href' => '/sample/home/view/Views/response/cell/blog',
            ],
            [
                'id' => 'BlogViewShow',
                'title' => '/response/cell/blog',
                'href' => '/response/cell/blog',
            ],
            [
                'id' => 'CellBlog',
                'title' => 'CellBlog.php',
                'href' => '/sample/home/view/Libraries/CellBlog',
            ],
            [
                'id' => 'CellBlogView',
                'title' => 'recentPosts.php',
                'href' => '/sample/home/view/Views/response/cell/recentPosts',
            ],
        ]) ?>

        <?= tabler_card_start() ?>
            <h2>셀 캐싱(Caching)</h2>

            <p>뷰 셀의 세 번째 매개 변수로 캐싱 시간(초)을 전달하여 뷰 셀 호출 결과를 캐시(cache)할 수 있습니다. 구성(Config)에 정의된 캐시 엔진을 사용합니다</p>
            <p>뷰 셀의 네 번째 매개 변수로 자동 생성 이름 대신 사용자 지정 이름을 제공할 수 있습니다.</p>
        <?= tabler_card_end() ?>
        <?= tabler_iframe_tabs([
            [
                'id' => 'Cache',
                'title' => 'Cache.php',
                'href' => '/sample/home/view/Controllers/Response/Cell/Cache',
            ],
            [
                'id' => 'CacheView',
                'title' => 'cache.php',
                'href' => '/sample/home/view/Views/response/cell/cache',
            ],
            [
                'id' => 'CacheViewShow',
                'title' => '/response/cell/cache',
                'href' => '/response/cell/cache',
            ],
            [
                'id' => 'CacheCellBlog',
                'title' => 'CellBlog.php',
                'href' => '/sample/home/view/Libraries/CellBlog',
            ],
            [
                'id' => 'CacheCellBlogView',
                'title' => 'recentPosts.php',
                'href' => '/sample/home/view/Views/response/cell/recentPosts',
            ],
        ]) ?>

    </div>
</div>
<?= $this->endSection() ?>