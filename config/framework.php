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

use DevCoder\DependencyInjection\Container;
use DevCoder\DependencyInjection\ReflectionResolver;
use Laminas\Diactoros\ResponseFactory;
use Laminas\Diactoros\ServerRequestFactory;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestInterface;

return [

    // Framework Settings

    /**
     * @return Closure - ServerRequestInterface
     * You can change it
     */
    'server_request' => static function (): ServerRequestInterface {
        return ServerRequestFactory::fromGlobals();
    },

    /**
     * @return Closure - ResponseFactoryInterface
     * You can change it
     */
    'response_factory' => static function (): ResponseFactoryInterface {
        return new ResponseFactory();
    },

    /**
     * @return ContainerInterface
     * You can change it
     */
    'container_builder' => static function (array $definitions, array $options): ContainerInterface {

//        $cacheDir = $options['cache_dir'];

        /**
         * PHP-DI Example : composer require php-di/php-di
         */

//        $builder = new DI\ContainerBuilder();
//        $builder->addDefinitions($definitions);
//        return $builder->build();

        return new Container(
            $definitions,
            new ReflectionResolver()
        );
    },

    /**
     * @return array<string>
     * You can change it
     */
    'custom_environments' => [],
];