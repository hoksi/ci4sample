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