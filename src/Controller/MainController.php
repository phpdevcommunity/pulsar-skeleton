<?php

namespace App\Controller;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Class ApiController
 * @package App\Controller
 */
class MainController
{
    public function __invoke(ServerRequestInterface $request, string $table, ?int $id = null): ResponseInterface
    {
        return new Response(200, [], 'Hello World !');
    }
}
