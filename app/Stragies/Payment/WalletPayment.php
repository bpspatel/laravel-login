<?php

namespace App\Stragies\Payment;

class WalletPayment implements PaymentStragey
{
    public function pay(float $amount): string
    {
        return 'Wallet payment successful for amount: '.$amount;
    }
}
