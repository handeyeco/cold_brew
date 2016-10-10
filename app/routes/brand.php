<?php

$brand = $app['controllers_factory'];

$brand->get('/', function () use ($app) {
  return $app['twig']->render("index.html.twig", array(
    "pageTitle" => "Brand"
  ));
});

return $brand;



?>
