<?php

use Middlewares\BasePath;
use Middlewares\Whoops;
use Pulsar\Core\Middleware\ControllerMiddleware;

return [
    Whoops::class,
    BasePath::class,
    RouterMiddleware::class,
    ControllerMiddleware::class,
];