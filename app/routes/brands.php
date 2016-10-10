<?php

$brands = $app['controllers_factory'];

$brands->get('/', function () use ($app) {
  return $app['twig']->render("index.html.twig", array(
    "pageTitle" => "Brands"
  ));
});

return $brands;



?>
