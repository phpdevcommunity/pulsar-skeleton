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

#--------------------------------------------------------------------
# Parameters
#--------------------------------------------------------------------
return [
    'app.url' => \getenv('APP_URL') ?? '',
    'app.locale' => \getenv('APP_LOCALE') ?? 'en',
    'template.directory' => \dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates',
];