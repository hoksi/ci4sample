<?php
$routes->add('products/([a-z]+)/(\d+)', 'Routing\Products::show/$1/id_$2');
$routes->add('login/(.+)', 'Routing\Products::login/$1');
