<?php

declare(strict_types=1);

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

use DevCoder\Listener\EventDispatcher;
use DevCoder\Listener\ListenerProvider;
use DevCoder\Router;
use Middlewares\BasePath;
use Psr\Container\ContainerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;
use Pulsar\Core\App;
use Pulsar\Core\ErrorHandler\ErrorRenderer\HtmlErrorRenderer;
use Pulsar\Core\ErrorHandler\ExceptionHandler;
use Pulsar\Core\Middlewares\RouterMiddleware;

#--------------------------------------------------------------------
# List of Services
#--------------------------------------------------------------------
return [
    ExceptionHandler::class => static function (ContainerInterface $container) {
        return new ExceptionHandler(App::getResponseFactory(), [
                'debug' => $container->get('pulsar.debug'),
                'html_response' => new HtmlErrorRenderer(
                    App::getResponseFactory(),
                    $container->get('pulsar.debug'),
                    $container->get('template.directory') . DIRECTORY_SEPARATOR . '_exception'
                )
            ]
        );
    },
    RouterMiddleware::class => static function (ContainerInterface $container) {
        return new RouterMiddleware($container->get('router'), App::getResponseFactory());
    },
    BasePath::class => static function (ContainerInterface $container) {
        return new BasePath($container->get('app.url'));
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
     * Router Example
     */
    'router' => static function (ContainerInterface $container) {
        /**
         * DevCoder Router Example
         * You can remove it and user another Router
         */
        return new Router(require 'routes.php');

        /**
         * Aura Router Example : composer require aura/router
         */
//        $routesArray = require 'routes.php';
//        $routerContainer = new \Aura\Router\RouterContainer();
//        foreach ($routesArray as $route) {
//            $routerContainer->getMap()->addRoute($route);
//        }
//        return $routerContainer;

        /**
         * Symfony Routing Example : composer require symfony/routing
         */
//        $routesArray = require 'routes.php';
//        $routes = new \Symfony\Component\Routing\RouteCollection();
//        foreach ($routesArray as $name => $route) {
//            $routes->add($name, $route);
//        }
//        return $routes;

    },
    /**
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
     */
];