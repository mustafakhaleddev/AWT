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
        $this->publishConfig();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfig();

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


    /**
     * merge awt config file with application config files
     */
    private function mergeConfig()
    {
        $path = $this->getConfigPath();
        $this->mergeConfigFrom($path, 'awt');
    }

    /**
     * publish awt config file to application config folder
     */
    private function publishConfig()
    {
        $path = $this->getConfigPath();
        $this->publishes([$path => config_path('awt.php')], 'config');
    }


    /**
     * return package awt config file dir
     * @return string
     */
    private function getConfigPath()
    {
        return __DIR__ . '/config/awt.php';
    }

}
