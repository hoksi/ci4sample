<?php

namespace App\Controllers\Cli;

use App\Controllers\BaseController;

class Hello extends BaseController
{
    public function index($name = 'world')
    {
        return "Hello {$name}!";
    }
}