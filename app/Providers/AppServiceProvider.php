<?php

namespace App\Providers;

use App\Models\Record;
use App\Models\Setting;
use App\Models\Buy;
use App\Models\Check;
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
        view()->composer('*',function($view) {
            $view->with('setting', Setting::where('id', '=', '1')->get());
            $view->with('count_record', Record::where('buy_status', NULL)->count());
            $view->with('count_buy', Buy::where('status', NULL)->count());
            $view->with('count_check', Check::count());
        });
    }
}
