<?php

include __DIR__ . '/vendor/autoload.php';




use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$collector = new RouteCollector();

$collector->get('/', ['ElCont\BaseController', 'getHome']);


$dispatcher =  new Dispatcher($collector->getData());

echo $dispatcher->dispatch('GET', '/');   // Home Page


?>


