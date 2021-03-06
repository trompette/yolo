<?php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$container = Yolo\Factory::createContainer();
$builder = $container->get('route_builder');

$builder->get('hello', '/', function (Request $request) {
    return new Response("Hallo welt, got swag yo!\n");
});

$front = $container->get('front_controller');
$front->run();
