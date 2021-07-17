<?php

declare(strict_types=1);

namespace App;

use DevCoder\DependencyInjection\Container;
use DevCoder\DependencyInjection\ReflectionResolver;
use Psr\Container\ContainerInterface;
use Psr\Http\Server\MiddlewareInterface;
use Pulsar\Core\BaseKernel;

/**
 * @package	Pulsar
 * @author	Devcoder.xyz <dev@devcoder.xyz>
 * @license	https://opensource.org/licenses/MIT	MIT License
 * @link	https://www.devcoder.xyz
 */
final class Kernel extends BaseKernel
{
    protected function getProjectDir(): string
    {
        return \dirname(__DIR__);
    }

    protected function loadContainer(
        array $parameters,
        array $services): ContainerInterface
    {
        return new Container(
            array_merge($parameters, $services),
            new ReflectionResolver()
        );
    }

    /**
     * @param array $middleware
     * @return array<MiddlewareInterface,string>
     */
    protected function loadMiddleware(array $middleware): array
    {
        return $middleware;
    }
}
