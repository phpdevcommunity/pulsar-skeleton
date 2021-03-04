<?php

namespace App;

use DevCoder\DependencyInjection\Container;
use DevCoder\DependencyInjection\ReflectionResolver;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\MiddlewareInterface;
use Pulsar\Core\BaseKernel;


/**
 * Class Kernel
 * @package App
 */
final class Kernel extends BaseKernel
{

    protected function getProjectDir(): string
    {
        return \dirname(__DIR__);
    }

    protected function loadContainer(array $parameters, array $services): ContainerInterface
    {
        return new Container(array_merge($parameters, $services), new ReflectionResolver());
    }

    /**
     * @param array $middlewares
     * @return array<MiddlewareInterface, string>
     */
    protected function loadMiddleware(array $middlewares): array
    {
        return $middlewares;
    }
}
