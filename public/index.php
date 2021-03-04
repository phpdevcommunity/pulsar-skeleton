<?php

use App\Kernel;
use GuzzleHttp\Psr7\ServerRequest;

if (phpversion() < '7.3') {
    die('Your PHP version must be 7.3 or higher to run LiteApp Framework. Your version: ' . phpversion());
}

require dirname(__DIR__).'/vendor/autoload.php';

$kernel = new Kernel();
$response = $kernel->handle(ServerRequest::fromGlobals());

if (php_sapi_name() !== 'cli') {
    Http\Response\send($response);
}

