<?php

namespace App\Controllers\Refactoring\Basic\Refactoring;

use App\Controllers\BaseController;

/**
 * Description of Exam4
 *
 * @author hoksi
 */
class Exam4 extends BaseController
{
    private $defaultOwner = ['firstName' => 'mr', 'lastName' => 'he'];

    public function getDefaultOwner()
    {
        return $this->defaultOwner;
    }

    public function setDefaultOwner($arg)
    {
        $this->defaultOwner = $arg;
        return $this;
    }
    
    public function index()
    {
        $spaceship['owner'] = $this->getDefaultOwner();
        $this->setDefaultOwner(['firstName' => 'mrs', 'lastName' => 'her']);

        echo '<pre>';
        echo 'spaceship = ' . print_r($spaceship, true) . "\n";
        echo 'defaultOwner = ' . print_r($this->getDefaultOwner(), true);
        echo '</pre>';
    }
}