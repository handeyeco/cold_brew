<?php

$blends = $app['controllers_factory'];

$blends->get('/', function () use ($app) {
  return $app['twig']->render("index.html.twig", array(
    "pageTitle" => "Blends"
  ));
});

return $blends;



?>
