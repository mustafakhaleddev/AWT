<?php

namespace mkhdev\AWT;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AWTServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->registerDirectives();

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {


    }


    /**
     * Register AWT blade directives.
     *
     * @return void
     */
    public function registerDirectives()
    {
        require __DIR__.'/AWTHelper.php';
        $directives = require __DIR__.'/awtBlade.php';
        AWTClass::register($directives);
    }
}
