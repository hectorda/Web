<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Http\Requests\Request;
use \Illuminate\Validation\Factory;
use App\Models\User;
use App\Providers\ChileRut as Rut;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Factory $factory)
    {
        $factory->extend('rut_valid',function ($attribute, $value, $parameters)
        {
                $rut = new Rut;
                return $rut->check($value);
        }
        ,'El campo Rut no tiene un formato válido'
        );
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
