<?php
namespace App\Controllers\Refactoring\Basic;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

/**
 * Description of Exam1
 *
 * @author hoksi
 */
class Exam1 extends BaseController
{
    public function printOwing($invoice)
    {
        $outstanding = 0;

        echo "*****************\n";
        echo "*** 고객 채무 ***\n";
        echo "*****************\n";

        foreach($invoice['orders'] as $o) {
            $outstanding += $o['amount'];
        }

        $time = Time::now();
        $invoice['dueDate'] = $time->addDays(30);

        echo "고객명 : {$invoice['customer']}\n";
        echo "채무액 : {$outstanding}\n";
        echo "마감일 : {$invoice['dueDate']}\n";
    }
    
    public function index()
    {
        $invoice = [
            'customer' => 'customer',
            'orders' => [
                ['amount' => 100],
                ['amount' => 110],
                ['amount' => 120],
                ['amount' => 130],
                ['amount' => 140],
            ],
            'dueDate' => '',
        ];

        echo '<pre>';
        $this->printOwing($invoice);
        echo '</pre>';
    }

}