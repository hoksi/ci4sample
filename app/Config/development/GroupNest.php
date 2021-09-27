<?php
$routes->group('admin', function ($routes)
{
    $routes->group('users', function ($routes)
    {
        $routes->add('lists', 'Routing\Admin\Users::list');
    });
});