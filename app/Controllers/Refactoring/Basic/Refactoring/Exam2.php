<?php
namespace App\Controllers\Refactoring\Basic\Refactoring;

use App\Controllers\BaseController;

/**
 * Description of Exam2
 *
 * @author hoksi
 */
class Exam2 extends BaseController
{
    protected function rating1($aDriver)
    {
        return ($aDriver['numberOfLateDeliveries'] > 5 ? 2 : 1);
    }

    protected function rating2($aDriver)
    {
        // 인라인시 $drv를 $aDriver로 리펙토링
        return ($aDriver['numberOfLateDeliveries'] < 5 ? 2 : 1);
    }

    protected function reportLines($aCustomer)
    {
        $lines = [];
        // 인라인시 $out을 $lines로 리펙토링
        $lines['name'] = $aCustomer['name'];
        $lines['location'] = $aCustomer['location'];
        return $lines;
    }

    public function index()
    {
        $aDriver = [
            'numberOfLateDeliveries' => 3
        ];

        $aCustomer = [
            'name' => 'Name',
            'location' => 'Location',
        ];

        echo '<pre>';
        echo "rating1 = {$this->rating1($aDriver)}\n";
        echo "rating2 = {$this->rating2($aDriver)}\n";
        echo "reportLines = " . print_r($this->reportLines($aCustomer), true);
        echo '</pre>';
    }
}