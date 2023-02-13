<?php

namespace Puleeno\WebdriverRequest;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class WebdriverClient implements ClientInterface {
    /**
     * @return self
     */
    public static function getInstance() {
        $instance = new static();

        return $instance;
    }

    /**
     * @return \Puleeno\WebdriverRequest\Response
     */
    public function sendRequest(RequestInterface $request): ResponseInterface
    {
        $response = new Response();

        return $response;
    }
}
