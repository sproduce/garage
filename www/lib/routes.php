<?php

$core_route = new Route('/');
$core_route->setMapClass('index')->setMapMethod('show');
$router->addRoute( 'index', $core_route );



$about_route = new Route('/about');
$about_route->setMapClass('index')->setMapMethod('about');
$router->addRoute( 'about', $about_route );



$class_route = new Route('/:class');
$class_route->addDynamicElement(':class', ':class')
	    ->setMapMethod('show');
$router->addRoute( 'class', $class_route);

$method_route = new Route('/:class/:method');
$method_route->addDynamicElement(':class', ':class')
	     ->addDynamicElement(':method', ':method');
$router->addRoute( 'method', $method_route);

$id_route = new Route('/:class/:method/:id');
$id_route->addDynamicElement(':class', ':class')
          ->addDynamicElement(':method', ':method')
          ->addDynamicElement(':id', ':id');
$router->addRoute( 'id', $id_route );

$ids_route = new Route('/:class/:method/:id/:ids');
$ids_route->addDynamicElement(':class', ':class')
          ->addDynamicElement(':method', ':method')
          ->addDynamicElement(':id', ':id')
          ->addDynamicElement(':ids', ':ids');
$router->addRoute( 'ids', $ids_route );
