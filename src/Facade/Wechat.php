<?php namespace Zhimei\LaravelWechat\Facade;


use Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * @see Overtrue\Wechat\Wechat
 */
class Wechat extends LaravelFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'wechat';
    }
}

