<?php

namespace App\Controllers\Controller;

use App\Controllers\BaseController;

/**
 * Description of Invisible
 *
 * @author hoksi
 */
class Invisible extends BaseController
{

    public function hello1()
    {
        echo 'pbulic';
    }

    protected function hello2()
    {
        echo 'protected';
    }

    private function hello3()
    {
        echo 'private';
    }
}