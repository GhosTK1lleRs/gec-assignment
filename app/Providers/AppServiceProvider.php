<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
        /**Blade::directive('rating', function ($rating, $i) {
            return "<?php
                foreach (range(1,5) as $i) {
                    echo \"<span class='fa-stack' style='width:1.25em'>
                    <i class='fa fa-star-o fa-stack-1x color-orange'></i>\";
                    if($rating >0) {
                        if($rating >0.5) {
                            echo \"<i class='fa fa-star fa-stack-1x color-orange'></i>\";
                        }
                        else {
                            echo \"<i class='fa fa-star-half-o fa-stack-1x color-orange'></i>\";
                        }
                    }
                    $rating--;
                    echo \"</span>\";
                }
                ?>";
        });
        */

    }

}
