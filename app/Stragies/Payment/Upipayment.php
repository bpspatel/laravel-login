<?php

namespace App\Stragies\Payment;

class Upipayment implements PaymentStragey
{
    public function pay(float $amount): string
    {
        return 'UPI payment successful for amount: '.$amount;
    }
}
