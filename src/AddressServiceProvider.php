<?php

namespace Damann8479\Address;

use Illuminate\Support\ServiceProvider;


class AddressServiceProvider extends ServiceProvider 

{

  public function boot()
  {
      $this->loadRoutesFrom(__DIR__.'/routes/web.php');
      $this->loadMigrationsFrom(__DIR__.'/database/migrations');
      $this->loadViewsFrom(__DIR__.'/views', 'address');
  }

  public function register()
  {
      
  }

}
