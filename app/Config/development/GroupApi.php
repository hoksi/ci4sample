<?php
$routes->group('api', ['namespace' => 'App\Controllers\Routing\API\v1'], function ($routes) {
    $routes->resource('users');
});
