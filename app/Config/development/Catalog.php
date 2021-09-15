<?php
$routes->add('product/(:num)', 'Routing\Catalog::productLookupByID/$1');
$routes->add('product/(:any)', 'Routing\Catalog::productLookup');
$routes->add('product2/(:any)', 'Routing\Catalog::productLookup2/$1');
$routes->add('product3/(:segment)', 'Routing\Catalog::productLookup3/$1');