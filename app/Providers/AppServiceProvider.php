<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('valid_email_domain', function ($attribute, $value, $parameters, $validator) {
            $allowedDomains = ['gmail.com', 'yahoo.com', 'hotmail.com', 'outlook.com', '@ymail.com'];
            $domain = substr(strrchr($value, "@"), 1);
            return in_array($domain, $allowedDomains);
        }, 'The :attribute is not verifiable, please try again with different email address.');
    
    }
}
