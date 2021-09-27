<?php
$routes->group('admin', function ($routes)
{
    $routes->add('users', 'Routing\Admin\Users::index');
    $routes->add('blogs', 'Routing\Admin\Blogs::index');
});
