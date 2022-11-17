<?php

namespace App\Providers;

use App\Models\Type;
use App\Models\User;
use App\Observers\TypeObserver;
use App\Observers\UserObserver;
use Faker\Factory as FakerFactory;
use Faker\Generator as FakerGenerator;
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

        if (env('FORCE_HTTPS')) {

            URL::forceScheme('https');
        }

        User::observe(UserObserver::class);
        Type::observe(TypeObserver::class);



        $this->app->singleton(FakerGenerator::class, function () {
            return FakerFactory::create('pt_BR');
        });

        \Illuminate\Support\Facades\Schema::defaultStringLength(191);

    }
}
