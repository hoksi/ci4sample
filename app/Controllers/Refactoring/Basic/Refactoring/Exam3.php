<?php

namespace App\Controllers\Refactoring\Basic\Refactoring;

use App\Controllers\BaseController;

/**
 * Description of Exam3
 *
 * @author hoksi
 */
class Exam3 extends BaseController
{

    protected function price($order)
    {
        $basePrice = $order['quantity'] * $order['itemPrice'];
        $quantityDiscount = max(0, $order['quantity'] - 500) * $order['itemPrice'] * 0.05;
        $shipping = min($basePrice * 0.1, 100);
        return $basePrice - $quantityDiscount + $shipping;
    }

    public function index()
    {
        $order = [
            'quantity' => 5,
            'itemPrice' => 1000
        ];

        echo '<pre>';
        echo "price = {$this->price($order)}";
        echo '</pre>';
    }
}