<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
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
        Paginator::useBootstrap();




        view()->composer(['user.layouts.sidebar', 'user.layouts.footer'], function($view) {


            if(Cache::has('recentPosts')) {
                $recentPosts = Cache::get('recentPosts');
            }else {
                $recentPosts = Post::orderBy('created_at', 'desc')->limit(5)->get();
                Cache::put('recentPosts', $recentPosts, 30);
            }

            if(Cache::has('popularPosts')) {
                $popularPosts = Cache::get('popularPosts');
            }else {
                $popularPosts = Post::orderBy('views', 'desc')->limit(3)->get();
                Cache::put('popularPosts', $popularPosts, 30);
            }

            if(Cache::has('categoryList')) {
                $categoryList = Cache::get('categoryList');
            }else {
                $categoryList = Category::select('title', 'slug')->withCount('posts')->orderBy('posts_count', 'desc')->get();
                Cache::put('categoryList', $categoryList, 30);
            }

            $view->with('recentPosts', $recentPosts);
            $view->with('popularPosts', $popularPosts);
            $view->with('categoryList', $categoryList);
        });

    }
}
