<?php

namespace Dawan;

use Psr\Http\Message\RequestInterface;

class Router
{

  /**
   * @var array
   */
  private $routes;

  /**
   * Router constructor.
   */
  public function __construct()
  {
    $this->routes = include AgendaApp::getSourceDir() . '/config/routing.php';
  }

  public function getRouteFromRequest(RequestInterface $request)
  {
    $path = $request->getUri()->getPath();
    if (!key_exists($path, $this->routes)) {
      throw new \Exception('404 ! ! ! !');
    }

    return $this->routes[$path];
  }
}