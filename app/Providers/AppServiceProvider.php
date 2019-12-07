<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('is_leap_year', function ($attribute, $value, $parameters, $validator) {
            return $value % 400 == 0 || ($value % 4 == 0 && $value % 100 != 0);
        });
    }
}
