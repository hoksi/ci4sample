<?php
$routes->add('users/profile', 'Routing\Users::profile', ['as' => 'profile']);

// Redirect to a named route
$routes->addRedirect('users/info', 'profile');
// Redirect to a URI
$routes->addRedirect('users/about', 'users/profile');