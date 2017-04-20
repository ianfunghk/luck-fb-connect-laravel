<?php

namespace Ianfunghk\Luckfbconnect;

use Illuminate\Support\Facades\Facade;

class LuckfbconnectFacade extends Facade
{
  protected static function getFacadeAccessor() : string
  {
    return 'luckfbconnect';
  }
}
