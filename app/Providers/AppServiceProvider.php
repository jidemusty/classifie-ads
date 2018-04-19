<?php

namespace App\Providers;

use App\Area;
use App\Category;
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
        Area::creating(function ($area) {
            $prefix = $area->parent ? $area->parent->name . ' ' : '';
            $area->slug = str_slug($prefix . $area->name);
        });

        Category::creating(function ($category) {
            $prefix = $category->parent ? $category->parent->name . ' ' : '';
            $category->slug = str_slug($prefix . $category->name);
        });
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
