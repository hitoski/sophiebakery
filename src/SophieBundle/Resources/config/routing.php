<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('sophie_homepage', new Route('/', array(
    '_controller' => 'SophieBundle:Default:index',
)));

return $collection;
