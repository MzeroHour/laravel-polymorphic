<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Polymoriphic able type change model name path
        // Relation::morphMap([
        //     'Post' => \App\Models\Post::class,
        //     'Video' => \App\Models\Post::class,
        // ]);
    }
}
