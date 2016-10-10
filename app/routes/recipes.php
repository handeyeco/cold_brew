<?php

$recipes = $app['controllers_factory'];

$recipes->get('/', function () use ($app) {
  return $app['twig']->render("index.html.twig", array(
    "pageTitle" => "Recipes"
  ));
});

return $recipes;



?>
