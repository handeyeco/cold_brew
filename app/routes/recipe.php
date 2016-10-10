<?php

$recipe = $app['controllers_factory'];

$recipe->get('/', function () use ($app) {
  return $app['twig']->render("index.html.twig", array(
    "pageTitle" => "Recipe"
  ));
});

return $recipe;



?>
