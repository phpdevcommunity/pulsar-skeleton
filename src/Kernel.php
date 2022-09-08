<?php

declare(strict_types=1);

namespace App;

use Pulsar\Core\BaseKernel;
use function dirname;

/**
 * @package    Pulsar
 * @author    Devcoder.xyz <dev@devcoder.xyz>
 * @license    https://opensource.org/licenses/MIT	MIT License
 * @link    https://www.devcoder.xyz
 */
final class Kernel extends BaseKernel
{
    protected function getCacheDir(): string
    {
        return getenv('APP_CACHE_DIR') ?: $this->getProjectDir() . DIRECTORY_SEPARATOR . 'var' . DIRECTORY_SEPARATOR . 'cache';
    }

    protected function getProjectDir(): string
    {
        return dirname(__DIR__);
    }

    protected function getLogDir(): string
    {
        return getenv('APP_LOG_DIR') ?: $this->getProjectDir() . DIRECTORY_SEPARATOR . 'var' . DIRECTORY_SEPARATOR . 'log';
    }

    protected function getConfigDir(): string
    {
        return $this->getProjectDir() . DIRECTORY_SEPARATOR . 'config';
    }
}
