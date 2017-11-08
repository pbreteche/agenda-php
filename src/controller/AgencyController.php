<?php

namespace Dawan\controller;

use Dawan\AgendaApp;
use Dawan\model\AgencyManager;
use GuzzleHttp\Psr7\Response;

class AgencyController
{

  public function listAgencies()
  {
    $manager = new AgencyManager();

    $agencies = $manager->findAll();

    $output = $this->render('listAgencies', ['agencies' => $agencies]);

    return new Response(
      200,
      [],
      $output
    );
  }

  public function detailAgency()
  {

    $output = $this->render('detailAgency', ['agencyInfo' => 'TEST']);

    return new Response(
      200,
      [],
      $output
    );
  }

  private function render(string $templateFile, array $vars)
  {
    extract($vars);

    ob_start();
    include AgendaApp::getSourceDir() . '/view/' . $templateFile . '.php';
    return ob_get_clean();

  }
}