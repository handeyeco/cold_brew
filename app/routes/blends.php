<?php

$blends = $app['controllers_factory'];

$blends->get('/', function () use ($app) {
  return $app['twig']->render("blends.html.twig", array(
    "pageTitle" => "Blends",
    "blends" => Blend::getAll(),
    "brands" => Brand::getAll()
  ));
});

return $blends;



?>
