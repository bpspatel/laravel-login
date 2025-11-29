<?php

namespace App\Http\Controllers;

use App\Services\PaymentServices;
use App\Http\Requests\PaymentRequest;

class PaymentController extends Controller
{
    private $paymentServices;

    public function __construct(PaymentServices $paymentServices)
    {
        $this->paymentServices = $paymentServices;
    }

    public function pay(PaymentRequest $request)
    {
        $type = $request->type;
        $amount = $request->amount;
        return $this->paymentServices->pay($type, $amount);
    }
}
