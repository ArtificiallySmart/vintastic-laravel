<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public $categories;
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
        if (!Schema::hasTable('categories')) {
            return;
        }
        $this->categories = Category::with('subcategories')->get();
        view()->composer('layouts.app', function ($view) {
            $view->with('categories', $this->categories);
        });
    }
}
