<?php

namespace App\Providers;

use App\Models\Posts\Post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PostServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Route::bind('post', function ($value) {
        //     return Post::where('slug', $value)->where('visibility_id', 1)->first();
        // });
    }
}
