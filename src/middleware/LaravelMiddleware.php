<?php

namespace luomor\openapidoc\middleware;

use luomor\openapidoc\utils\ConfigProvider;

class LaravelMiddleware
{
    public function handle($request, \Closure $next)
    {
        $params = $request->all();
        $config =  ConfigProvider::get();
        $config['request_params'] = $params;
        ConfigProvider::set($config);
        return $next($request);
    }
}