<?php

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

return [
    Whoops::class => static function (ContainerInterface $container) {
        return new Whoops(null, App::getResponseFactory());
    },
    RouterInterface::class => static function (ContainerInterface $container) {
        return new Router(require 'routes.php');
    },
    RouterMiddleware::class => static function (ContainerInterface $container) {
        return new RouterMiddleware($container->get(RouterInterface::class), App::getResponseFactory());
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
];