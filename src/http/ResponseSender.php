<?php

namespace Dawan\http;

use Psr\Http\Message\ResponseInterface;

class ResponseSender {

  public static function send(ResponseInterface $response) {
    http_response_code($response->getStatusCode());
    echo $response->getBody();
  }
}