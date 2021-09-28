<?php
namespace App\Controllers\Routing;

use App\Controllers\BaseController;

/**
 * Description of Reverse
 *
 * @author hoksi
 */
class Reverse extends BaseController
{
    public function index()
    {
        !d([
            route_to('App\Controllers\Routing\Catalog::productLookupByID/$1', 15),
            route_to('App\Controllers\Routing\Catalog::productLookup2/$1', 15),
            route_to('App\Controllers\Routing\Catalog::productLookup3/$1', 15),
        ]);
    }
}