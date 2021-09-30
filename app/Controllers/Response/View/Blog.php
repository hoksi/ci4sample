<?php
namespace App\Controllers\Response\View;

use App\Controllers\BaseController;

/**
 * Description of Blog
 *
 * @author hoksi
 */
class Blog extends BaseController
{
    public function index()
    {
        echo view('response/view/BlogView');
    }
}