<?php

use Pulsar\Core\Http\Exception\HttpExceptionInterface;

/**
 * @var HttpExceptionInterface $exception
 */
echo render_view(dirname(__DIR__) . '/base.html.php', [
    'main' => sprintf('<h1>Oops, an error occurred</h1><h2>Error %s :  %s</h2>',
        $exception->getStatusCode(),
        $exception->getDefaultMessage()
    )
]);
