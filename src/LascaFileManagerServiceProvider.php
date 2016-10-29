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



        # install
        # composer require neyromanser/lasca-file-manager
        # php artisan vendor:publish --provider="Vendor\Neyromanser\LascaFileManager\LascaFileManagerServiceProvider" --tag="config"

        #$this->app['router']->get($glideConfig['baseURL'].'/{all}', 'Spatie\Glide\Controller\GlideImageController@index')->where('all', '.*');

        # $this->loadViewsFrom(__DIR__.'/path/to/views', 'courier');
        # return view('courier::view.name');

        //include __DIR__.'/routes.php';
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(){
        $this->mergeConfigFrom(__DIR__ . '/../config/lasca-file-manager.php', 'lasca-file-manager');

        $this->app->bind('lasca-file-manager', function () {

            /*
            $glideImage = new GlideImage();

            $glideImage
                ->setSignKey($this->getSignKey(config('laravel-glide')))
                ->setBaseURL($this->app['config']->get('laravel-glide.baseURL'));

            return $glideImage;*/
        });

        //parent::register();
    }


}
