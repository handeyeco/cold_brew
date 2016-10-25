<?php

$recipes = $app['controllers_factory'];

$recipes->get('/', function () use ($app) {
  return $app['twig']->render("recipes.html.twig", array(
    "pageTitle" => "Recipes",
    "recipes" => Recipe::getAll(),
    "brands" => Brand::getAll(),
    "blends" => Blend::getAll()
  ));
});

return $recipes;



?>
