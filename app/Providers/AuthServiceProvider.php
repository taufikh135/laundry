<?php

namespace App\Providers;

use App\Guards\JwtGuard;
use App\Services\JwtService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Auth::extend('jwt', function ($app, $name, array $config) {
            $guard = new JWTGuard(
                userProvider: Auth::createUserProvider($config['provider']),
                request: $app->make(Request::class),
                jwtService: $app->make(JWTService::class)
            );
            $app->refresh('request', $guard, 'setRequest');
            return $guard;
        });
    }
}
