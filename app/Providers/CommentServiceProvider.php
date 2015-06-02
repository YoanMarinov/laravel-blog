<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->bind('App\Contracts\CommentRepositoryInterface', 'App\Repositories\CommentRepository');
    }

}
