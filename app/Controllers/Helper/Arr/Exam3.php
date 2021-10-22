<?php

namespace App\Controllers\Helper\Arr;

use App\Controllers\BaseController;

/**
 * Description of Exam3
 *
 * @author hoksi
 */
class Exam3 extends BaseController
{

    public function index()
    {
        helper('array');

        return view('helper/arr/exam3', [
            'data' => [
                [
                    'name' => 'John',
                    'team_id' => 2,
                    'position' => 3,
                    'team' => [
                        'id' => 1,
                        'order' => 2,
                    ],
                ],
                [
                    'name' => 'Maria',
                    'team_id' => 5,
                    'position' => 4,
                    'team' => [
                        'id' => 5,
                        'order' => 1,
                    ],
                ],
                [
                    'name' => 'Frank',
                    'team_id' => 5,
                    'position' => 1,
                    'team' => [
                        'id' => 5,
                        'order' => 1,
                    ],
                ],
            ],
        ]);
    }
}