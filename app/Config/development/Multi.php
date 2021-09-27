<?php
$routes->map([
    'mproduct/(:num)'      => 'Routing\Catalog2::productLookupById/$1',
    'mproduct/(:alphanum)' => 'Routing\Catalog2::productLookupByName/$1'
]);

