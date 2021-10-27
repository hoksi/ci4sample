<?php
namespace App\Controllers\Refactoring\Basic\Refactoring;

use App\Controllers\BaseController;

function priceOrder($product, $quantity, $shippingMethod)
{
    $priceData = calculatePricingData($product, $quantity);
    return applyShipping($priceData, $shippingMethod);
}

function calculatePricingData($product, $quantity)
{
    $basePrice = $product['basePrice'] * $quantity;
    $discount = max($quantity - $product['discountThreshold'], 0) * $product['basePrice'] * $product['discountRate'];

    return ['basePrice' => $basePrice, 'quantity' => $quantity, 'discount' => $discount];
}

function applyShipping($priceData, $shippingMethod)
{
    $shippingPerCase = ($priceData['basePrice'] > $shippingMethod['discountThreshold']) ? $shippingMethod['discountedFee'] : $shippingMethod['feePerCase'];
    $shippingCost = $priceData['quantity'] * $shippingPerCase;
    return $priceData['basePrice'] - $priceData['discount'] + $shippingCost;
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