<?php

namespace App\Controllers\Controller;

use App\Controllers\BaseController;

/**
 * Description of Helloworld2
 *
 * @author hoksi
 */
class Helloworld2 extends BaseController
{

    public function index()
    {
        echo 'Hello World!';
    }

    public function comment()
    {
        echo 'I am not flat!';
    }
}