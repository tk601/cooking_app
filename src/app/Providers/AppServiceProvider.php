<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Ingredient\IngredientRepositoryInterface::class,
            \App\Repositories\Ingredient\IngredientRepository::class
        );

        $this->app->bind(
            \App\Repositories\Refrigerator\RefrigeratorRepositoryInterface::class,
            \App\Repositories\Refrigerator\RefrigeratorRepository::class
        );

        $this->app->bind(
            \App\Repositories\Recipe\RecipeRepositoryInterface::class,
            \App\Repositories\Recipe\RecipeRepository::class
        );
    }
}
