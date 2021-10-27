<?php
namespace App\Controllers\Refactoring\Basic\Refactoring;

use App\Controllers\BaseController;

/**
 * Description of Exam5
 *
 * @author hoksi
 */
class Exam5 extends BaseController
{
    protected function readingsOutsideRange($station, $range)
    {
        return array_filter($station['readings'], function($r) use ($range) {
           return ($r['temp'] < $range->getMin() || $r['temp'] > $range->getMax());
        });

    }

    public function index()
    {
        $range = new NumberRange(50, 55);

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
        print_r($this->readingsOutsideRange($station, $range));
        echo '</pre>';

    }
}

class NumberRange {
    protected $data;

    public function __construct($min, $max)
    {
        $this->data = ['min' => $min, 'max' => $max];
    }

    public function getMin()
    {
        return $this->data['min'];
    }

    public function getMax()
    {
        return $this->data['max'];
    }
}