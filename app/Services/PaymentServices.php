<?php

namespace App\Services;

use App\Stragies\Payment\CardPayment;
use App\Stragies\Payment\PaymentStragey;
use App\Stragies\Payment\UpiPayment;
use App\Stragies\Payment\WalletPayment;

class PaymentServices
{
    private $paymentStrategy;

    // /**
    //  * Create a new class instance.
    //  */
    // public function __construct(PaymentStragey $paymentStrategy)
    // {
    //     $this->paymentStrategy = $paymentStrategy;
    // }

    public function setPaymentStrategy(PaymentStragey $paymentStrategy)
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function getPaymentStrategy(string $type): PaymentStragey
    {
        return match ($type) {
            'card' => new CardPayment,
            'upi' => new UpiPayment,
            'wallet' => new WalletPayment,
            default => throw new \Exception('Invalid payment type'),
        };
    }

    public function pay(string $type, float $amount): string
    {
        $strategy = $this->getPaymentStrategy($type);

        return $strategy->pay($amount);
    }
}
