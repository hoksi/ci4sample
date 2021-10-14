<?php

namespace App\Controllers\Helper\Arr;

use App\Controllers\BaseController;

/**
 * Description of Exam1
 *
 * @author hoksi
 */
class Exam1 extends BaseController
{

    public function index()
    {
        helper('array');

        return view('helper/arr/exam1',
            [
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
            'dotData' => [
                'foo' => [
                    'bar.baz' => 23,
                ],
                'foo.bar' => [
                    'baz' => 43,
                ],
            ],
        ]);
    }
}