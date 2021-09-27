<?php
namespace App\Controllers\Routing;

use App\Controllers\BaseController;

/**
 * Description of Catalog2
 *
 * @author hoksi
 */
class Catalog2 extends BaseController
{
    public function productLookupByID($id)
    {
        echo '$id = ' . $id;
    }

    public function productLookupByName($name)
    {
        echo '$name = ' . $name;
    }
}