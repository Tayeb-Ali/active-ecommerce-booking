<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
       $middlewares = DB::table('middlewares')
           ->where('middleware_status', '=', 1)
           ->get();
       $router = app('router');
       foreach ($middlewares as $item) {
           $router->pushMiddlewareToGroup($item->middleware_group, $item->middleware_path . $item->middleware_name);
       }
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
