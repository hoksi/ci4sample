<?php

namespace App\Controllers\Refactoring\Basic;

use App\Controllers\BaseController;

/**
 * Description of Exam4
 *
 * @author hoksi
 */
class Exam4 extends BaseController
{
    public $defaultOwner = ['firstName' => 'mr', 'lastName' => 'he'];
    
    public function index()
    {
        $spaceship['owner'] = $this->defaultOwner;
        $this->defaultOwner = ['firstName' => 'mrs', 'lastName' => 'her'];

        echo '<pre>';
        echo 'spaceship = ' . print_r($spaceship, true) . "\n";
        echo 'defaultOwner = ' . print_r($this->defaultOwner, true);
        echo '</pre>';
    }
}