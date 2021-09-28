<?php
// The route is defined as:
$routes->add('users/(:num)/gallery(:any)', 'Routing\Galleries::showUserGallery/$1/$2', ['as' => 'user_gallery']);