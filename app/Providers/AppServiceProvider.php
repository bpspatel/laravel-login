<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Stragies\Payment\CardPayment;
use App\Stragies\Payment\UpiPayment;
use App\Stragies\Payment\WalletPayment;
use App\Stragies\Payment\PaymentStragey;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // $this->app->bind(PaymentStragey::class, CardPayment::class);   
        // $this->app->bind(PaymentStragey::class, UpiPayment::class);  
        // $this->app->bind(PaymentStragey::class, WalletPayment::class);  
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
