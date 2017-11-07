<?php

namespace Dawan;


use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class AgendaApp {

  /**
   * @var ResponseInterface
   */
  private $response;

  public function handle(RequestInterface $request) {
    $this->response = new Response(
      200,
      [],
      '<h1>Hello world!</h1>'
    );
  }

  public function sendResponse() {
    if(!isset($this->response)) {
      throw new IllogicalException('Response must be build BEFORE it could be sent!');
    }

    http_response_code($this->response->getStatusCode());
    echo $this->response->getBody();
  }
}
