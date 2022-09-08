<?php
/**
 * Pulsar PHP Framework
 *
 * An open source application development framework for PHP
 *
 * @package    Pulsar
 * @author    Devcoder.xyz
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link    https://www.devcoder.xyz
 */


#--------------------------------------------------------------------
# List of Middleware
#--------------------------------------------------------------------
return [
    \Middlewares\BasePath::class => ['dev', 'prod'],
    \Pulsar\Core\Middlewares\RouterMiddleware::class => ['dev', 'prod'],
    \Pulsar\Core\Middlewares\ControllerMiddleware::class => ['dev', 'prod'],
];