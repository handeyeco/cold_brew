<?php

require_once __DIR__."/../../vendor/autoload.php";

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
  "twig.path" => __DIR__."/../views"
));

$app->get("/", function () use ($app) {
  return $app['twig']->render("index.html.twig");
});

$app->mount('admin',    include __DIR__.'/../routes/admin.php');
$app->mount('recipes',  include __DIR__.'/../routes/recipes.php');
$app->mount('recipe',   include __DIR__.'/../routes/recipe.php');
$app->mount('brands',   include __DIR__.'/../routes/brands.php');
$app->mount('brand',    include __DIR__.'/../routes/brand.php');
$app->mount('blends',   include __DIR__.'/../routes/blends.php');
$app->mount('blend',    include __DIR__.'/../routes/blend.php');

return $app;

?>
