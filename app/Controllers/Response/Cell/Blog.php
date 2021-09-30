<?php
namespace App\Controllers\Response\Cell;

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
        $data = [
            'title'     => 'My Real Title',
            'heading'   => 'My Real Heading',
        ];

        return view('response/cell/blog', $data);
    }
}