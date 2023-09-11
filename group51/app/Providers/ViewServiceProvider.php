<?php

namespace App\Providers;

use App\ViewComposer\ViewComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //View::share(['webName' => 'ahmed' , 'ty' => 555]);
        // View::composer(['front.*'], );
        View::composer('branches.allbranches', ViewComposer::class);
    }
}
