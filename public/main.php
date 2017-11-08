<?php

require __DIR__ . '/../vendor/autoload.php';

$request = \Dawan\http\RequestFactory::createFromGlobals();
$agendaApp = new \Dawan\AgendaApp();
$response = $agendaApp->handle($request);
\Dawan\http\ResponseSender::send($response);
