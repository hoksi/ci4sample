<?php
namespace App\Controllers\Refactoring\Basic;

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

function baseRate($month, $year)
{
    return $year / $month;
}

function calculateBaseCharge($aReading)
{
    return baseRate($aReading['month'], $aReading['year']) * $aReading['quantity'];
}

/**
 * Description of Exam7
 *
 * @author hoksi
 */
class Exam7 extends BaseController
{
    protected function client1()
    {
        $aReading = acquireReading();
        $baseCharge = baseRate($aReading['month'], $aReading['year']) * $aReading['quantity'];

        return $baseCharge;
    }

    protected function client2()
    {
        $aReading = acquireReading();
        $base = (baseRate($aReading['month'], $aReading['year']) * $aReading['quantity']);
        $taxableCharge = max(0, $base - taxThreshold($aReading['year']));

        return $taxableCharge;
    }

    protected function client3()
    {
        $aReading = acquireReading();
        $baseCharge = calculateBaseCharge($aReading);

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