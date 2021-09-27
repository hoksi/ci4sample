<?= tabler_card_start() ?>
<h2>클로저(Closure)</h2>

<p>경로가 매핑되는 대상으로 익명 함수(anonymous function) 또는 클로저를 사용할 수 있습니다. 이 기능은 사용자가 해당 URI를 방문할 때 실행됩니다. 작은 작업을 빠르게 실행하거나 간단히 뷰만 표시하는 데 편리합니다.</p>
<?= tabler_card_end() ?>

<?= tabler_iframe_tabs([
    [
        'id' => 'CloserRoute',
        'title' => 'Routes.php',
        'href' => '/sample/home/view/Config/development/Closer',
    ],
    [
        'id' => 'closerShow',
        'title' => '/feed',
        'href' => '/feed',
    ],
]) ?>

<?= tabler_card_start() ?>
<h2>다중 경로 매핑</h2>

<p>한 번에 여러 경로에 대해 매핑하려면 add() 메소드보다 map() 메소드를 사용하는것이 편리합니다. 추가해야 할 각 경로에 대해 add() 메소드를 여러번 호출하는 대신 배열로 경로(route)를 정의한 다음 이를 map() 메소드에 매개 변수로 전달할 수 있습니다.</p>
<?= tabler_card_end() ?>

<?= tabler_iframe_tabs([
    [
        'id' => 'MultiRoute',
        'title' => 'Routes.php',
        'href' => '/sample/home/view/Config/development/Multi',
    ],
    [
        'id' => 'MultiCatalog',
        'title' => 'Catalog2.php',
        'href' => '/sample/home/view/Controllers/Routing/Catalog2',
    ],
    [
        'id' => 'multi1Show',
        'title' => '/mproduct/123',
        'href' => '/mproduct/123',
    ],
    [
        'id' => 'multi2Show',
        'title' => '/mproduct/abc1',
        'href' => '/mproduct/abc1',
    ],
]) ?>

<?= tabler_card_start() ?>
<h2>라우트 리디렉션</h2>

<p>서비스를 오래 동안 유지한 사이트는 페이지가 이동되기 마련입니다. 라우트의 addRedirect() 메소드를 사용하면 이전 경로를 다른 경로로 리디렉션(redirect)할 수 있습니다. 첫 번째 매개 변수는 이전 경로의 URI 패턴입니다. 두 번째 매개 변수는 리디렉션할 새 URI 또는 명명된 경로(route)명입니다. 세 번째 매개 변수는 리디렉션과 함께 전송되어야 하는 HTTP 상태 코드입니다. 기본값은 임시 리디렉션을 뜻하는 302이며 대부분의 경우 권장됩니다</p>
<p>페이지 로드중 요청(request) 경로가 리디렉션 경로와 일치하면 컨트롤러를 로드하기 전에 사용자는 새 페이지로 리디렉션됩니다.</p>
<?= tabler_card_end() ?>

<?= tabler_iframe_tabs([
    [
        'id' => 'RedirectRoute',
        'title' => 'Routes.php',
        'href' => '/sample/home/view/Config/development/Redirect',
    ],
    [
        'id' => 'RedirectUser',
        'title' => 'Users.php',
        'href' => '/sample/home/view/Controllers/Routing/Users',
    ],
    [
        'id' => 'redirect1Show',
        'title' => '/users/info',
        'href' => '/users/info',
    ],
    [
        'id' => 'redirect2Show',
        'title' => '/users/about',
        'href' => '/users/about',
    ],
]) ?>
