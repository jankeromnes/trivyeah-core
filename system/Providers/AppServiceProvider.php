<?php

namespace System\Providers;

use Illuminate\Support\Fluent;
use Illuminate\Support\Facades\Request;
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
        Request::macro('dto', function () {
            $data = $this->all();

            foreach ($data as $key => $value) {
                $dto[$this->mapToDb[$key] ?? $key] = $value;
            }

            return new Fluent($dto ?? []);
        });
 
    }
}
