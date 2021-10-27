<?php
namespace App\Controllers\Refactoring\Basic\Refactoring;

use App\Controllers\BaseController;

function acquireReading()
{
    $reading = [
        'customer' => 'ivan',
        'quantity' => 10,
        'month' => 5,
        'year' => 2017,
    ];

    return $reading;
}

function taxThreshold($year)
{
    return $year > 2015 ? 0 : 0.5;
}

/**
 * Description of Exam6
 *
 * @author hoksi
 */
class Exam6 extends BaseController
{
    protected function client1()
    {
        $rawReading = acquireReading();
        $aReading = new Reading($rawReading);
        $baseCharge = $aReading->getBaseCharge();

        return $baseCharge;
    }

    protected function client2()
    {
        $rawReading = acquireReading();
        $aReading = new Reading($rawReading);
        $taxableCharge = $aReading->taxableChargeFn();

        return $taxableCharge;
    }

    protected function client3()
    {
        $rawReading = acquireReading();
        $aReading = new Reading($rawReading);
        $baseCharge = $aReading->getBaseCharge();

        return $baseCharge;
    }

    public function index()
    {
        echo '<pre>';
        echo "client1 : {$this->client1()}\n";
        echo "client2 : {$this->client2()}\n";
        echo "client3 : {$this->client3()}\n";
        echo '</pre>';
    }
}

class Reading {
    protected $customer;
    protected $quantity;
    protected $month;
    protected $year;

    public function __construct($data)
    {
        $this->customer = $data['customer'];
        $this->quantity = $data['quantity'];
        $this->month = $data['month'];
        $this->year = $data['year'];
    }

    public function getCustomer()
    {
        return $this->customer;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getMonth()
    {
        return $this->month;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function baseRate($month, $year)
    {
        return $year / $month;
    }

    public function getBaseCharge()
    {
        return $this->baseRate($this->month, $this->year) * $this->quantity;
    }

    public function taxableChargeFn()
    {
        return max(0, $this->getBaseCharge() - taxThreshold($this->getYear()));
    }

}