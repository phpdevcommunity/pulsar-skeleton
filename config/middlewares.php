<?php

use DevCoder\RouterMiddleware;
use Middlewares\BasePath;
use Pulsar\Core\Middleware\ControllerMiddleware;
use Pulsar\Core\Middleware\HttpExceptionHandlerMiddleware;

#--------------------------------------------------------------------
# Middleware Mode PROD
#--------------------------------------------------------------------
return [
    BasePath::class,
    HttpExceptionHandlerMiddleware::class,
    RouterMiddleware::class,
    ControllerMiddleware::class,
];