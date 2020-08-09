<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(env('FORCE_HTTPS', true)) { // Default value should be false for local server
            URL::forceScheme('https');
        }

        Schema::defaultStringLength(191);

        Blade::if('eachError', function ($campo, $errors) {
            if(!$errors->get($campo)){
                echo old($campo);
            }
        });

        Blade::if('select', function($campo, $comparacion){
            if(old($campo) == $comparacion){
                echo "selected";
            }
        });

        Blade::if('selectMultiple', function($campo, $comparacion){
            if(in_array($comparacion, old($campo))){
                echo "selected";
            }
        });

        Blade::if('showError', function($campo, $errors){
            if($errors->get($campo)){
                foreach ($errors->get($campo) as $error){
                    echo $error;
                };
            }
        });

        Blade::if('is_valid', function($campo, $errors){
            if($errors->get($campo)){
                echo 'is-invalid';
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
