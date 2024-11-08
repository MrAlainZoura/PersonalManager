<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Blade;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use function PHPUnit\Framework\returnSelf;

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
        Schema::defaultStringLength(200);
        Blade::directive('Heure', function ($date){
            // dd($this->formaVar($date));
            // $heure = Carbon::createFromFormat('H:i:s',$date);
             return $date;
        });

        Blade::directive('variable', function($da){
            // dd($da);
            return Carbon::createFromFormat('H:i:s',$da); 
        });

    }
   
}
