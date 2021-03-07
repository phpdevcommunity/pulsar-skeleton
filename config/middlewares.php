<?php

use DevCoder\RouterMiddleware;
use Middlewares\BasePath;
use Pulsar\Core\Middleware\ControllerMiddleware;

return [
    BasePath::class,
    RouterMiddleware::class,
    ControllerMiddleware::class,
];