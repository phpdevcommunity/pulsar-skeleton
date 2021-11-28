<?php

declare(strict_types=1);

/**
 * Pulsar PHP Framework
 *
 * An open source application development framework for PHP
 *
 * @package	Pulsar
 * @author	Devcoder.xyz
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://www.devcoder.xyz
 */

use DevCoder\RouterMiddleware;
use Middlewares\Whoops;
use Pulsar\Core\Middleware\ControllerMiddleware;
use Pulsar\Core\Middleware\HttpExceptionHandlerMiddleware;

#--------------------------------------------------------------------
# List of Middleware Mode DEV
#--------------------------------------------------------------------
return [
    Whoops::class,
     \Middlewares\BasePath::class,
    HttpExceptionHandlerMiddleware::class,
    // \App\Middleware\AuraRouterMiddleware::class,
   RouterMiddleware::class,
    ControllerMiddleware::class,
];