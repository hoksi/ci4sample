<?php

namespace App\Controllers\Controller;

use App\Controllers\BaseController;

/**
 * Description of Remap2
 *
 * @author hoksi
 */
class Remap2 extends BaseController
{

    public function _remap($method, ...$params)
    {
        $method = 'process_'.$method;
        if (method_exists($this, $method)) {
            return $this->$method(...$params);
        }
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    public function process_some1($param1, $param2)
    {
        echo 'Some method!<br/>';
        echo 'param1 : ' . $param1 . '<br/>';
        echo 'param2 : ' . $param2 . '<br/>';
    }

    public function process_some2(...$params)
    {
        echo 'Default method!<br/>';
        print_r($params);
    }
}