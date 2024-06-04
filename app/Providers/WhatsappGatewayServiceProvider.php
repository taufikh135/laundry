<?php

namespace App\Providers;

use App\Services\WhatsappGatewayService;
use Illuminate\Support\ServiceProvider;

class WhatsappGatewayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(WhatsappGatewayService::class, function ($app) {
            return new WhatsappGatewayService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
