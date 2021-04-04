<?php

declare(strict_types=1);

return [
    // Framework Settings PSR
    /**
     * @return \Psr\Http\Message\ServerRequestInterface
     * You can change it
     */
    'server_request' => static function () {
        return \Laminas\Diactoros\ServerRequestFactory::fromGlobals();
    },
    /**
     * @return \Psr\Http\Message\ResponseFactoryInterface
     * You can change it
     */
    'response_factory' => static function () {
        return new \Laminas\Diactoros\ResponseFactory();
    },
    //--------------------
];