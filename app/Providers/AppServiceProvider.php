<?php
// app/Providers/AppServiceProvider.php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\AuthRepositoryInterface;
use App\Repositories\AuthRepository;
use App\Services\AuthService;
use App\Repositories\ReservationRepository;
use App\Repositories\ReservationRepositoryInterface;
use App\Services\ReservationService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ReservationRepositoryInterface::class, ReservationRepository::class);
        $this->app->bind(ReservationService::class, function ($app) {
            return new ReservationService($app->make(ReservationRepositoryInterface::class));
        });
    
        $this->app->bind(AuthRepositoryInterface::class, AuthRepository::class);
        $this->app->bind(AuthService::class, function ($app) {
            return new AuthService($app->make(AuthRepositoryInterface::class));
        });
        $this->app->bind(
            \App\Repositories\RoomRepositoryInterface::class,
            \App\Repositories\RoomRepository::class
        );
        
        $this->app->bind(
            \App\Services\RoomService::class,
            function ($app) {
                return new \App\Services\RoomService(
                    $app->make(\App\Repositories\RoomRepositoryInterface::class)
                );
            }
        );
        
    }

    public function boot()
    {
        //
    }
}
