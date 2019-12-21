<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\Paypal;
use Illuminate\Support\Facades\View;
use App\Http\View\Composers\LanguageComposer;
use Illuminate\Support\Str;
use App\Mixins\StrMixins;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->singleton(Paypal::class, function($app) {
        //     return new Paypal('usd');
        // });
        $this->app->when(Paypal::class)
                  ->needs('$currency')
                  ->give('usd');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $langs = [
            ['name' => 'english'],
            ['name' => 'arabic'],
            ['name' => 'germany'],
        ];

        // View::share('langs', $langs);

        // View::composer(['category.*', 'item.*'], function ($view) use ($langs) {
        //     $view->with('langs', $langs);
        // });

        View::composer(['category.*'], LanguageComposer::class);



        Str::mixin(new StrMixins);



    }
}
