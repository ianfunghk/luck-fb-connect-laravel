# Facebook Connect for Laravel

// config/app.php

'providers' => [
    // ...
    Ianfunghk\Luckfbconnect\LuckfbconnectServiceProvider::class,
],

'aliases' => [
    // ...
    'Luckfbconnect' => Ianfunghk\Luckfbconnect\LuckfbconnectFacade::class,
],

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
