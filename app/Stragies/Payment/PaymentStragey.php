<?php

namespace App\Stragies\Payment;

interface PaymentStragey
{
    public function pay(float $amount): string;
}
