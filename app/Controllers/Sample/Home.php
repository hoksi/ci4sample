<?php
namespace App\Controllers\Sample;

/**
 * Description of Home
 *
 * @author hoksi
 */
class Home extends \App\Controllers\BaseController
{
    public function index()
    {
        return view('sample/sample');
    }
}