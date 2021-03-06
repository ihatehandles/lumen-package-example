<?php namespace Ihatehandles\Sweet;

use Illuminate\Support\ServiceProvider;

class SweetServiceProvider extends ServiceProvider
{

   /**
    * Bootstrap the application services.
    *
    * @return void
    */
   public function boot()
   {
      $this->loadViewsFrom(__DIR__.'/views', 'sweet');
      $this->publishes([
	    __DIR__.'/views' => base_path('resources/views/ihatehandles/sweet'),
	  ]);
   }

   /**
    * Register the application services.
    *
    * @return void
    */
   public function register()
   {
      include __DIR__.'/routes.php';
      $this->app->make('Ihatehandles\Sweet\SweetController');
   }

}
