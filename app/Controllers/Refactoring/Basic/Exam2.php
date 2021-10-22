<?php
namespace App\Controllers\Refactoring\Basic;

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
        return ($this->moreThanFiveLateDeliveries($aDriver) ? 2 : 1);
    }

    protected function moreThanFiveLateDeliveries($aDriver)
    {
        return $aDriver['numberOfLateDeliveries'] > 5;
    }

    protected function rating2($aDriver)
    {
        return ($this->lessThanFiveLateDeliveries($aDriver) ? 2 : 1);
    }

    protected function lessThanFiveLateDeliveries($drv)
    {
        return $drv['numberOfLateDeliveries'] < 5;
    }

    protected function reportLines($aCustomer)
    {
        $lines = [];
        $lines = $this->getherCustomerData($lines, $aCustomer);
        return $lines;
    }

    protected function getherCustomerData($out, $aCustomer)
    {
        $out['name'] = $aCustomer['name'];
        $out['location'] = $aCustomer['location'];

        return $out;
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