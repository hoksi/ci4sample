<?php
$routes->group('api', ['filter' => 'csrf', 'namespace' => 'App\Controllers\Routing\API\v1'], function ($routes)
{
    $routes->resource('users2');
});
