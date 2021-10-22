<?php

namespace App\Controllers\Helper\Arr;

use App\Controllers\BaseController;

/**
 * Description of Exam4
 *
 * @author hoksi
 */
class Exam4 extends BaseController
{

    public function index()
    {
        helper('array');

        return view('helper/arr/exam4', [
            'data' => [
                'personal' => [
                    'first_name' => 'john',
                    'last_name' => 'smith',
                    'age' => '26',
                    'address' => 'US',
                ],
                'other_details' => 'marines officer',
            ],
        ]);
    }
}