<?= tabler_card_start() ?>
    <h2>리버스(Reverse) 라우팅</h2>

    <p>리버스 라우팅은 링크와 연결해야 하는 모든 매개변수뿐만 아니라, 컨트롤러와 메소드를 정의하고, 라우터가 현재 경로를 조회하도록 할 수 있습니다. 이렇게 하면 어플리케이션 코드를 업데이트하지 않고도 경로 정의를 변경할 수 있습니다. 이것은 일반적으로 링크를 만들기 위해 뷰에서 사용됩니다.</p>
    <p>다음 예는 연결하려는 상품에 대한 경로를 얻기 위해 route_to() 헬퍼 함수를 사용합니다. 첫 번째 매개 변수는 초기 경로 자체를 작성할 때 사용하는 것과 같이 정규화된 컨트롤러 및 메소드이며 이중 콜론(::)으로 구분합니다. 경로로 전달되어야하는 모든 매개 변수는 다음 매개 변수에 전달됩니다.</p>
<?= tabler_card_end() ?>
<?= tabler_iframe_tabs([
    [
        'id' => 'reverceRoute',
        'title' => 'Routes.php',
        'href' => '/sample/home/view/Config/development/Catalog',
    ],
    [
        'id' => 'reverce',
        'title' => 'Reverse.php',
        'href' => '/sample/home/view/Controllers/Routing/Reverse',
    ],
    [
        'id' => 'reverseShow',
        'title' => '/routing/reverse',
        'href' => '/routing/reverse',
    ],
]) ?>

<?= tabler_card_start() ?>
    <h2>경로(route) 이름 지정</h2>

    <p>경로 이름과 함께 as 옵션을 전달하여 경로 이름을 지정할 수 있으며, 이름이 지정된 경로는 경로 정의가 변경되어도, `route_to()`로 구축된 링크에 대해 변경된 정보로 수정하지 않아도 계속 작동합니다.</p>
<?= tabler_card_end() ?>
<?= tabler_iframe_tabs([
    [
        'id' => 'namedRoute',
        'title' => 'Routes.php',
        'href' => '/sample/home/view/Config/development/Named',
    ],
    [
        'id' => 'galleries',
        'title' => 'Galleries.php',
        'href' => '/sample/home/view/Controllers/Routing/Galleries',
    ],
    [
        'id' => 'galleriesShow',
        'title' => '/routing/galleries',
        'href' => '/routing/galleries',
    ],
    [
        'id' => 'showUserGalleriesShow',
        'title' => '/users/15/gallery12',
        'href' => '/users/15/gallery12',
    ],
]) ?>

<?= tabler_card_start() ?>
    <h2>라우트에 HTTP 동사(verbs) 사용</h2>

    <p>HTTP 동사(request method)를 사용하여 라우팅 규칙을 정의 할 수 있습니다. RESTFUL 어플리케이션을 빌드할 때 특히 유용합니다. 표준 HTTP 동사(GET, POST, PUT, DELETE 등)를 사용할 수 있습니다. 각 동사는 사용할 수 있는 고유한 메소드가 있습니다.</p>

    <pre>
$routes->get('products', 'Product::feature');
$routes->post('products', 'Product::feature');
$routes->put('products/(:num)', 'Product::feature');
$routes->delete('products/(:num)', 'Product::feature');
    </pre>

    <p>match 메소드에 배열로 일치해야 하는 여러 동사에 경로를 제공할 수 있습니다.</p>

    <pre>
$routes->match(['get', 'put'], 'products', 'Product::feature');
    </pre>
<?= tabler_card_end() ?>