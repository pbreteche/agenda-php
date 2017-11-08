<?php

namespace Dawan;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class AgendaApp
{
  public static function getSourceDir() {
    return __DIR__;
  }

  public function handle(RequestInterface $request): ResponseInterface
  {
    // chargement de configuration

    $router = new Router();

    try {
      $route = $router->getRouteFromRequest($request);
    }
    catch (\Exception $e) {
      return new Response(404, [], '<span style="font-size:60px; color:darkred">Cette page n\'est pas la page que vous cherchez</span>');
    }
    $controllerInfo = explode('::', $route['controller']);
    $controllerInstance = new $controllerInfo[0]();

    return call_user_func([$controllerInstance, $controllerInfo[1]], $route['args']);
  }
}
