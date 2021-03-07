<?php

declare(strict_types=1);

namespace App\Controller;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Pulsar\Core\Controller\Controller;

final class MainController extends Controller
{
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        return new Response(200, [], 'Hello World !');
    }
}
