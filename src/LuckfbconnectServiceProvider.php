<?php

namespace Ianfunghk\Luckfbconnect;

use Illuminate\Support\ServiceProvider;
use Route;

class LuckfbconnectServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {

    $this->app->bind(Luckfbconnect::class, function () {
      return Luckfbconnect::new();
    });

    $this->app->alias(Luckfbconnect::class, 'luckfbconnect');
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    Route::get('luckfblogin','ianfunghk\luckfbconnect\LuckfbconnectController@index');
    $this->app->make('Ianfunghk\Luckfbconnect\LuckfbconnectController');
  }
}
