<?php

namespace Dawan\controller;

use Dawan\AgendaApp;
use Dawan\model\AgencyManager;
use GuzzleHttp\Psr7\Response;

class AgencyController {


  public function listAgencies() {
    $manager = new AgencyManager();

    $agencies = $manager->findAll();

    ob_start();
    include AgendaApp::getSourceDir() . '/view/listAgencies.php';
    $output = ob_get_clean();

    return new Response(
      200,
      [],
      $output
    );

  }
}