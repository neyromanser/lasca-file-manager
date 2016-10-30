<?php
namespace Neyromanser\LascaFileManager;

use Illuminate\Support\ServiceProvider;


class LascaFileManagerServiceProvider extends ServiceProvider {

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('lasca-file-manager.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/../public/' => public_path(config('lasca-file-manager.route_prefix'))
        ], 'public');

        if (! $this->app->routesAreCached()) {
            //require __DIR__.'/../routes.php';
        }

        $this->loadViewsFrom(__DIR__.'/kcfinder/views', 'lasca-file-manager');

        //$this->registerRoutes();

        # install
        # composer require neyromanser/lasca-file-manager
        # php artisan vendor:publish --provider="Neyromanser\LascaFileManager\LascaFileManagerServiceProvider" --tag="config"

        #$this->app['router']->get($glideConfig['baseURL'].'/{all}', 'Spatie\Glide\Controller\GlideImageController@index')->where('all', '.*');
        //$this->app['router']->get('/admin/file-manager/browse', 'Neyromanser\LascaFileManager\Controller\LascaFileManagerController@browse');

        # $this->loadViewsFrom(__DIR__.'/path/to/views', 'courier');
        # return view('courier::view.name');

        //include __DIR__.'/routes.php';
    }

    public function registerRoutes(){
        $fileManagerConfig = config('lasca-file-manager');

        $this->app['router']->group([
            'prefix' => $fileManagerConfig['route_prefix'],
            'namespace' => 'Neyromanser\LascaFileManager\Controller',
            'middleware' => 'auth'
        ], function () {
            $this->app['router']->get("/browse", [
            'uses' => 'LascaFileManagerController@browse'
            ]);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(){
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'lasca-file-manager');

        //$this->app->bind('lasca-file-manager', function () {

            /*
            $glideImage = new GlideImage();

            $glideImage
                ->setSignKey($this->getSignKey(config('laravel-glide')))
                ->setBaseURL($this->app['config']->get('laravel-glide.baseURL'));

            return $glideImage;*/
        //});

        //parent::register();
    }


}
