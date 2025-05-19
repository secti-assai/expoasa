<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        // Increase request size limit for file uploads
        $this->app->singleton(
            \Illuminate\Contracts\Debug\ExceptionHandler::class,
            \App\Exceptions\Handler::class
        );
        
        // Set higher limits for uploads - these are PHP directives but won't override server settings
        // You'll need to ensure your server's php.ini also allows files of this size
        ini_set('post_max_size', '15M');
        ini_set('upload_max_filesize', '10M');
        
        // Increase memory limit to handle larger files
        ini_set('memory_limit', '256M');
        ini_set('max_input_time', 300);
        ini_set('max_execution_time', 300);
    }
}
