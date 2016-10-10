<?php

$blend = $app['controllers_factory'];

$blend->get('/', function () use ($app) {
  return $app['twig']->render("index.html.twig", array(
    "pageTitle" => "Blend"
  ));
});

return $blend;



?>
