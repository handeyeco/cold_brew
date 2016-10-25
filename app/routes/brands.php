<?php

$brands = $app['controllers_factory'];

$brands->get('/', function () use ($app) {
  return $app['twig']->render("brands.html.twig", array(
    "pageTitle" => "Brands",
    "brands" => Brand::getAll()
  ));
});

return $brands;



?>
