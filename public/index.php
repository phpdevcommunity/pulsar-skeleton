<?php
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

use App\Kernel;
use Pulsar\Core\App;

if (phpversion() < '7.3') {
    die('Your PHP version must be 7.3 or higher to run Pulsar PHP Framework. Your version: ' . phpversion());
}

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$kernel = new Kernel();
$response = $kernel->handle(App::createServerRequest());
\send($response);
