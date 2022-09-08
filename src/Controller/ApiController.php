<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Pulsar\Core\BaseKernel;
use Pulsar\Core\Controller\Controller;

final class ApiController extends Controller
{
    public function __invoke(ServerRequestInterface $request): ResponseInterface
    {
        return json_response([
            'framework' => 'Pulsar PHP micro-framework',
            'version' => BaseKernel::VERSION,
            'title' => 'Fast and light Framework for PHP',
            'sub_title' => 'Size : 1,57MB with the dependencies (production environment)',
            'detail' => 'Set up web applications and APIs with clean, simple code and very easy configuration.
                            You choose which components you want to use, nothing is imposed!
                            No configuration in YML, .ini or xml, only PHP',
            'other' => 'Made with ❤ in Paris by Devcoder.xyz (Fady M.R) Contact us'
        ]);
    }
}
