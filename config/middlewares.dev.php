<?php

use DevCoder\RouterMiddleware;
use Middlewares\BasePath;
use Middlewares\Whoops;
use Pulsar\Core\Middleware\ControllerMiddleware;
use Pulsar\Core\Middleware\HttpExceptionHandlerMiddleware;

#--------------------------------------------------------------------
# Middleware Mode DEV
#--------------------------------------------------------------------
return [
    Whoops::class,
    BasePath::class,
    HttpExceptionHandlerMiddleware::class,
    RouterMiddleware::class,
    ControllerMiddleware::class,
];