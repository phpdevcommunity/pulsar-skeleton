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

use App\Controller\MainController;

return [
    /**
     * DevCoder Router Example
     * You can remove it and user another Router
     */
    new \DevCoder\Route('main', '/', [MainController::class]),
    new \DevCoder\Route('api_main', '/api', [\App\Controller\ApiController::class]),

    /**
     * Aura Router Example : composer require aura/router
     * @see config/services.php
     */
//    (new \Aura\Router\Route())
//        ->name('main')
//        ->allows('GET')
//        ->path('/')
//        ->handler([MainController::class]),

    /**
     * Symfony Routing Example : composer require symfony/routing
     * @see config/services.php
     */
//    'main' => new \Symfony\Component\Routing\Route('', ['_controller' => MainController::class]),
//    'main' => new \Symfony\Component\Routing\Route('', [
//        '_controller' => MainController::class,
//        '_action' => 'index'
//    ])
];
