<?php

use DevCoder\Listener\EventDispatcher;
use DevCoder\Listener\ListenerProvider;
use DevCoder\Router;
use DevCoder\RouterInterface;
use DevCoder\RouterMiddleware;
use Http\Factory\Guzzle\ResponseFactory;
use Middlewares\BasePath;
use Middlewares\Whoops;
use Psr\Container\ContainerInterface;
use Psr\EventDispatcher\EventDispatcherInterface;

return [
    Whoops::class => static function (ContainerInterface $container) {
        return new Whoops(null, new ResponseFactory());
    },
    RouterInterface::class => static function (ContainerInterface $container) {
        return new Router(require 'routes.php');
    },
    RouterMiddleware::class => static function (ContainerInterface $container) {
        return new RouterMiddleware($container->get(RouterInterface::class), new ResponseFactory());
    },
    BasePath::class => static function (ContainerInterface $container) {
        return new BasePath($container->get('base.url'));
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