<?php

namespace App\Controllers\Controller;

use App\Controllers\BaseController;

/**
 * Description of Remap1
 *
 * @author hoksi
 */
class Remap1 extends BaseController
{

    public function _remap($method)
    {
        if ($method === 'some_method') {
            return $this->$method();
        } else {
            return $this->default_method();
        }
    }

    public function some_method()
    {
        echo 'Some method!';
    }

    public function default_method()
    {
        echo 'Default method!';
    }
}