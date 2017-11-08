<?php

namespace Dawan;


use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class AgendaApp
{

  public function handle(RequestInterface $request): ResponseInterface
  {
    return new Response(
      200,
      [],
      '<h1>Hello world!</h1>'
    );
  }
}
