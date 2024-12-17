<?php

namespace App\Providers;

use DateTime;
use Illuminate\Support\Carbon;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
             return "<?php 
               echo $date;
              ?>";
        });

        Blade::directive('variable', function($da){
            // dd($da);
            return Carbon::createFromFormat('H:i:s',$da); 
        });

        Blade::directive('Mois', function ($num){
            // dd($num);
           return "<?php
           if($num==1){
            echo 'Janvier';
           }
            
           if($num==9){
           echo 'Septembre';
            }
           if($num==10){
            echo 'Octobre';
            }
            if($num<=0 || $num>12){
                echo 'indicateur de mois incorrect';
            }
             ?>";
        });

    }
   
}
