<?php

namespace App\Controllers\Helper\Arr;

use App\Controllers\BaseController;

/**
 * Description of Exam2
 *
 * @author hoksi
 */
class Exam2 extends BaseController
{

    public function index()
    {
        helper('array');

        return view('helper/arr/exam2',[
            'data' => [
                'foo' => [
                    'buzz' => [
                        'fizz' => 11,
                    ],
                    'bar' => [
                        'baz' => 23,
                    ]
                ]
            ],
        ]);
    }
}