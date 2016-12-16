<?php

namespace LaravelClient\Client;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * 延迟加载.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Boot the provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__.'/config.php');

        if ($this->app instanceof LaravelApplication) {
            if ($this->app->runningInConsole()) {
                $this->publishes([
                    $source => config_path('client.php'),
                ]);
            }
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure('client');
        }

        $this->mergeConfigFrom($source, 'client');
    }

    /**
     * Register the provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(['LaravelSso\\Client\\Client' => 'client'], function ($app) {
            return new Server(config('client'));
        });
    }
}
