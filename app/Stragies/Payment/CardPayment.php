<?php

namespace App\Stragies\Payment;

class CardPayment implements PaymentStragey
{
    public function pay(float $amount): string
    {
        return 'Card payment successful for amount: '.$amount;
    }
}
