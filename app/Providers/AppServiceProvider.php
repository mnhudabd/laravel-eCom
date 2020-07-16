<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
     /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
       //Schema::defaultStringLength(191);

       $categories = category::select(['name', 'slug'])->where('category_id', null)->get();

        view()->share('categories', $categories);
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

   
}
