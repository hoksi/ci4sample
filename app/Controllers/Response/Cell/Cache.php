<?php
namespace App\Controllers\Response\Cell;

use App\Controllers\BaseController;

/**
 * Description of Cache
 *
 * @author hoksi
 */
class Cache extends BaseController
{
    public function index()
    {
        $data = [
            'title'     => 'My Real Title',
            'heading'   => 'My Real Heading',
        ];

        return view('response/cell/cache', $data);
    }
}