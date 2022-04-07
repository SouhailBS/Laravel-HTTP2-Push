<?php namespace TomKeyte\LaravelHttp2Push\Facades;

use Illuminate\Support\Facades\Facade;

class H2Facade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'h2';
    }
}
