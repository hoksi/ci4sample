<?= tabler_card_start() ?>
    <h2>라우트 그룹화</h2>

    <p>
        `group()` 메소드를 사용하여 경로를 그룹화 할 수 있습니다.
        그룹 이름은 그룹 내부에 정의된 경로 앞에 나타나는 세그먼트가 됩니다.
        이렇게 하면 관리자 영역을 구축할 때와 같이 시작 문자열을 공유하는 광범위한 경로 작성에 필요한 입력(typing)을 줄일 수 있습니다.
    </p>
    <p> 다음 예제는 ‘users’와 ‘blog’ URI를 접두사 “admin”을 사용하여 `/admin/users`와 `/admin/blog`로 만들어 줍니다.</p>
<?= tabler_card_end() ?>
<?= tabler_iframe_tabs([
    [
        'id' => 'groupAdminRoute',
        'title' => 'Routes.php',
        'href' => '/sample/home/view/Config/development/GroupAdmin',
    ],
    [
        'id' => 'groupAdminUsers',
        'title' => 'Admin/Users.php',
        'href' => '/sample/home/view/Controllers/Routing/Admin/Users',
    ],
    [
        'id' => 'groupAdminBlogs',
        'title' => 'Admin/Blogs.php',
        'href' => '/sample/home/view/Controllers/Routing/Admin/Blogs',
    ],
    [
        'id' => 'groupAdminUsersShow',
        'title' => '/admin/users',
        'href' => '/admin/users',
    ],
    [
        'id' => 'groupAdminBlogsShow',
        'title' => '/admin/blogs',
        'href' => '/admin/blogs',
    ],
]) ?>

<?= tabler_card_start() ?>
    <p>그룹에 옵션을 할당할 수 있습니다. 다음 예는 `namespace`를 옵션으로 지정하였으며,  URI `/api/users`를 사용하여 `App\Controllers\Routing\API\v1` 컨트롤러에 대한 리소스 경로(route)를 처리합니다.</p>
<?=tabler_card_end() ?>
<?= tabler_iframe_tabs([
    [
        'id' => 'groupAPIRoute',
        'title' => 'Routes.php',
        'href' => '/sample/home/view/Config/development/GroupApi',
    ],
    [
        'id' => 'groupApiV1Users',
        'title' => 'API/vi/Users.php',
        'href' => '/sample/home/view/Controllers/Routing/API/v1/Users',
    ],
    [
        'id' => 'groupApiV1UsersShow',
        'title' => '/api/users',
        'href' => '/api/users',
    ],
]) ?>

<?= tabler_card_start() ?>
    <p>라우트 그룹에 특정 필터(filter)를 사용할 수 있습니다. 필터를 사용하면 컨트롤러 호출 전후에 필터를 실행하며, 인증이나 api 로깅에 유용합니다.</p>
    <p>필터 값은 app/Config/Filters.php에 정의된 별칭(aliase)중 하나와 일치해야 합니다. 다음 예는 'csrf' 필터를 적용한 예입니다.</p>
<?=tabler_card_end() ?>
<?= tabler_iframe_tabs([
    [
        'id' => 'groupFilterRoute',
        'title' => 'Routes.php',
        'href' => '/sample/home/view/Config/development/GroupFilter',
    ],
    [
        'id' => 'configFilter',
        'title' => 'Filters.php',
        'href' => '/sample/home/view/Config/Filters',
    ],
    [
        'id' => 'groupFilterUsers',
        'title' => 'API/v1/Users2.php',
        'href' => '/sample/home/view/Controllers/Routing/API/v1/Users2',
    ],
    [
        'id' => 'groupFilterUsers2Show',
        'title' => '/api/users2',
        'href' => '/api/users2',
    ],
]) ?>

<?= tabler_card_start() ?>
    <p>필요한 경우 그룹 내에 그룹을 중첩하여 보다 세밀한 구성을 할 수 있습니다.<p>
    <p>다음은 URL `admin/users/lists`를 라우팅한 예입니다. 외부 group()에 전달된 옵션(예: namespace와 filter)은 내부 group()에 전달되지 않습니다.</p>
<?= tabler_card_end() ?>
<?= tabler_iframe_tabs([
    [
        'id' => 'groupNestRoute',
        'title' => 'Routes.php',
        'href' => '/sample/home/view/Config/development/GroupNest',
    ],
    [
        'id' => 'groupNestUsers',
        'title' => 'Admin/Users.php',
        'href' => '/sample/home/view/Controllers/Routing/Admin/Users',
    ],
    [
        'id' => 'groupNestUsersShow',
        'title' => '/admin/users/lists',
        'href' => '/admin/users/lists',
    ],
]) ?>
<?= tabler_card_start() ?>
    <p>필터 또는 네임스페이스, 하위 도메인 등과 같은 다른 경로 구성 옵션을 적용하기 위해 경로를 그룹화할 수 있습니다. 그룹에 접두사를 추가할 필요 없이 접두사 대신 빈 문자열을 전달할 수 있으며, 그룹의 경로는 그룹이 존재하지 않지만 주어진 경로 구성 옵션을 사용하여 라우팅됩니다.</p>
<?= tabler_card_end() ?>