<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Pulsar\Core\Controller\Controller;

final class MainController extends Controller
{
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        $templateDir = $this->get('template_directory');
        $response = $this->createResponse();

        ob_start();
        include $templateDir . DIRECTORY_SEPARATOR . 'welcome.html.php';

        $response->getBody()->write(ob_get_clean());
        return $response;
    }
}
