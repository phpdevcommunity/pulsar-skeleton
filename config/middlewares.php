<?php

use Middlewares\BasePath;
use Pulsar\Core\Middleware\ControllerMiddleware;

return [
    BasePath::class,
    ControllerMiddleware::class,
];