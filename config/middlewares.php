<?php
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
use Pulsar\Core\Middleware\ControllerMiddleware;
use Pulsar\Core\Middleware\HttpExceptionHandlerMiddleware;

#--------------------------------------------------------------------
# List of Middleware Mode PROD
#--------------------------------------------------------------------
return [
    // \Middlewares\BasePath::class,
    HttpExceptionHandlerMiddleware::class,
    // \App\Middleware\AuraRouterMiddleware::class,
    RouterMiddleware::class,
    ControllerMiddleware::class,
];