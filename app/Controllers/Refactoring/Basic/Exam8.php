<?php
namespace App\Controllers\Refactoring\Basic;

use App\Controllers\BaseController;

function priceOrder($product, $quantity, $shippingMethod)
{
    $basePrice = $product['basePrice'] * $quantity;
    $discount = max($quantity - $product['discountThreshold'], 0) * $product['basePrice'] * $product['discountRate'];
    $shippingPerCase = ($basePrice > $shippingMethod['discountThreshold']) ? $shippingMethod['discountedFee'] : $shippingMethod['feePerCase'];
    $shippingCost = $quantity * $shippingPerCase;
    $price = $basePrice - $discount + $shippingCost;

    return $price;
}

/**
 * Description of Exam8
 *
 * @author hoksi
 */
class Exam8 extends BaseController
{
    public function index()
    {
        $product = ['basePrice' => 10000, 'discountThreshold' => 8000, 'discountRate' => 0.1];
        $shippingMethod = ['discountThreshold' => 8000, 'discountedFee' => 500, 'feePerCase' => 3500];

        echo '<pre>';
        echo "priceOrder : " . priceOrder($product, 5, $shippingMethod) . "\n";
        echo '</pre>';
    }
}