<?php

namespace Dawan;


use Dawan\controller\AgencyController;
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

    // choix du contrôleur adapté


    $controller = new AgencyController();

    return $controller->listAgencies();

  }
}
