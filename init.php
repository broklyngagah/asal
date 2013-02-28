<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request,
    Symfony\Component\HttpFoundation\Response;

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();

$request = Request::createFromGlobals();
$response = new Response();