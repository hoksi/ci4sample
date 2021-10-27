<?php
namespace App\Controllers\Refactoring\Basic;

use App\Controllers\BaseController;

/**
 * Description of Exam5
 *
 * @author hoksi
 */
class Exam5 extends BaseController
{
    protected function readingsOutsideRange($station, $min, $max)
    {
        return array_filter($station['readings'], function($r) use ($min, $max) {
           return ($r['temp'] < $min || $r['temp'] > $max);
        });

    }

    public function index()
    {
        $station = [
            'name' => 'ZB!',
            'readings' => [
                ['temp' => 47, 'time' => '2016-11-10 09:10'],
                ['temp' => 53, 'time' => '2016-11-10 09:20'],
                ['temp' => 58, 'time' => '2016-11-10 09:30'],
                ['temp' => 53, 'time' => '2016-11-10 09:40'],
                ['temp' => 51, 'time' => '2016-11-10 09:50'],
            ],
        ];

        echo '<pre>';
        print_r($this->readingsOutsideRange($station, 50, 55));
        echo '</pre>';

    }
}