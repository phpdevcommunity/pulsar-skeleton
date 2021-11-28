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

use DevCoder\Listener\EventDispatcher;
use DevCoder\Listener\ListenerProvider;
use DevCoder\Router;
use DevCoder\RouterInterface;
use DevCoder\RouterMiddleware;
use Middlewares\BasePath;
use Middlewares\Whoops;
use Psr\Container\ContainerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use Pulsar\Core\App;
use Pulsar\Core\Middleware\HttpExceptionHandlerMiddleware;

#--------------------------------------------------------------------
# List of Services
#--------------------------------------------------------------------
return [
    Whoops::class => static function (ContainerInterface $container) {
        return new Whoops(null, App::getResponseFactory());
    },
    HttpExceptionHandlerMiddleware::class => static function (ContainerInterface $container) {
        return new HttpExceptionHandlerMiddleware(App::getResponseFactory());
    },
    BasePath::class => static function (ContainerInterface $container) {
        return new BasePath($container->get('base_url'));
    },
    EventDispatcherInterface::class => static function (ContainerInterface $container) {
        $provider = new ListenerProvider();
        $listeners = require 'listeners.php';
        foreach ($listeners as $listener) {
            $provider->addListener($listener, $container->get($listener));
        }
        return new EventDispatcher($provider);
    },
    /**
     * DevCoder Router Example
     * You can remove it and user another Router
     */
    RouterInterface::class => static function (ContainerInterface $container) {
        return new Router(require 'routes.php');
    },
    RouterMiddleware::class => static function (ContainerInterface $container) {
        return new RouterMiddleware($container->get(RouterInterface::class), App::getResponseFactory());
    },
    /**
     * -------------------------------------------
     * -------------------------------------------
     * -------------------------------------------
     */

    /**
     * Symfony Console Example : composer require symfony/console
     */
//    \Symfony\Component\Console\Application::class => static function (ContainerInterface $container) {
//        $commandList = require 'commands.php';
//        $commands = [];
//        foreach ($commandList as $commandName) {
//            $commands[] = $container->get($commandName);
//        }
//        $application = new \Symfony\Component\Console\Application();
//        $application->addCommands($commands);
//        return $application;
//    },

    /**
     * -------------------------------------------
     * -------------------------------------------
     * -------------------------------------------
     */

];