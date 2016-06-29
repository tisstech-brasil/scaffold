<?php

namespace TisstechBrasil\Scaffold;

use Illuminate\Support\ServiceProvider;

class ScaffoldServiceProvider extends ServiceProvider
{
    protected $commands = [
        'TisstechBrasil\Scaffold\Commands\MakeScaffoldCommand',
        'TisstechBrasil\Scaffold\Commands\RemoveScaffoldCommand'
    ];
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->register(\Collective\Html\HtmlServiceProvider::class);

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();

        $loader->alias('Form', '\Collective\Html\FormFacade');
        $loader->alias('Html', '\Collective\Html\HtmlFacade');

        $this->commands($this->commands);
    }
}
