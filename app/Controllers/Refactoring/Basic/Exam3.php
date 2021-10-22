<?php

namespace App\Controllers\Refactoring\Basic;

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
        // 가격(price) = 기본 가격 - 수량 할인 + 배송비
        return $order['quantity'] * $order['itemPrice'] -
            max(0, $order['quantity'] - 500) * $order['itemPrice'] * 0.05 +
            min($order['quantity'] * $order['itemPrice'] * 0.1, 100);
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