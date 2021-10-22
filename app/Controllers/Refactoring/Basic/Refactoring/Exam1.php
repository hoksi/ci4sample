<?php
namespace App\Controllers\Refactoring\Basic\Refactoring;

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
        $this->printBanner();
        $outstanding = $this->calculateOutstanding($invoice);
        $invoice = $this->recordDueData($invoice);
        $this->printDetail($invoice, $outstanding);
    }

    protected function printBanner()
    {
        echo "*****************\n";
        echo "*** 고객 채무 ***\n";
        echo "*****************\n";
    }

    protected function printDetail($invoice, $outstanding)
    {
        echo "고객명 : {$invoice['customer']}\n";
        echo "채무액 : {$outstanding}\n";
        echo "마감일 : {$invoice['dueDate']}\n";
    }

    protected function recordDueData($invoice)
    {
        $time = Time::now();
        $invoice['dueDate'] = $time->addDays(30);

        return $invoice;
    }

    protected function calculateOutstanding($invoice)
    {
        $outstanding = 0;
        foreach($invoice['orders'] as $o) {
            $outstanding += $o['amount'];
        }

        return $outstanding;
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