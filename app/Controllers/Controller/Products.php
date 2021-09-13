<?php

namespace App\Controllers\Controller;

use App\Controllers\BaseController;

/**
 * Description of Products
 *
 * @author hoksi
 */
class Products extends BaseController
{

    public function shoes($sandals, $id)
    {
        echo $sandals;
        echo $id;
    }
}