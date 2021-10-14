<?php
namespace App\Controllers\Helper\Date;

use App\Controllers\BaseController;

/**
 * Description of Exam
 *
 * @author hoksi
 */
class Exam extends BaseController
{
    public function index()
    {
        helper('date');

        echo '<pre>';

        print_r([
            'now()' => now(),
            "now('Australia/Victoria')" => now('Australia/Victoria'),
            "timezone_select()" => timezone_select(),
            "timezone_select('custom-select', 'America/New_York')" => timezone_select('custom-select', 'Asia/Seoul'),
        ]);
    }
}