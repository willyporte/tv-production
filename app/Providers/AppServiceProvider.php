<?php

namespace App\Providers;

use Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Validator::extend('cf', function ($attribute, $value, $parameters, $validator) {
            // obtengo los parametros
            // $parameters[0] = vat_mumber
            $data = $validator->getData();
            $vat_number = $data[$parameters[0]];


            if (preg_match("/^[A-Z]{6}[A-Z0-9]{2}[A-Z][A-Z0-9]{2}[A-Z][A-Z0-9]{3}[A-Z]$/", $value)) {
                return true;
            }
            elseif (preg_match("/^[0-9]{11}$/", $value) AND $value == $vat_number) {

                return true;
            }
            else {
                return false;
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
