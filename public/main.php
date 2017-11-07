<?php

require __DIR__ . '/../vendor/autoload.php';


$request = new \GuzzleHttp\Psr7\Request('GET', '/');
$agendaApp = new \Dawan\AgendaApp();
$agendaApp->handle($request);
$agendaApp->sendResponse();



