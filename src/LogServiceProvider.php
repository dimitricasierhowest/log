<?php

namespace Dimitricasierhowest\Log;

use Dimitricasierhowest\Log\Logger\FileLog;
use Dimitricasierhowest\Log\Logger\LogInterface;
use Dimitricasierhowest\Log\Logger\ScreenLog;
use Illuminate\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind(LogInterface::class, function($app){
            $type = config('log.log_type');

            if($type == "screen")
                return new ScreenLog();

            if($type == "file")
                return new FileLog();

            return null;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__  . '/routes.php');

        // ------------
        // -- config --
        // ------------
        $this->publishes([
            __DIR__ . '/../config/log.php' => config_path('log.php')
        ], 'dchw-config');


        // ----------------
        // -- migrations --
        // ----------------
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
        ], 'dchw-migrations');


        // ------------------
        // -- translations --
        // ------------------
        // -- register namespace
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang/', 'dchw-log');

        // -- publish files
        $this->publishes([
            __DIR__ . '/../resources/lang/' => resource_path('lang/vendor/log'),
        ], 'dchw-resources');

    }
}
