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

/**
 * DevCoder Router Example
 */
return [
    new \DevCoder\Route('main', '/', [\App\Controller\MainController::class])
];
/**
 * -------------
 */