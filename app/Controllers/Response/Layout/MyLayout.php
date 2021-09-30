<?php
namespace App\Controllers\Response\Layout;

use App\Controllers\BaseController;

/**
 * Description of MyLayout
 *
 * @author hoksi
 */
class MyLayout extends BaseController
{
    public function index()
    {
        return view('response/layout/myView');
    }

    public function script()
    {
        return view('response/layout/myScript');
    }

    public function partial()
    {
        return view('response/layout/myPartial');
    }
}