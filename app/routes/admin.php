<?php

$admin = $app['controllers_factory'];

$admin->get('/', function () use ($app) {
  return $app['twig']->render("index.html.twig", array(
    "pageTitle" => "Admin"
  ));
});

return $admin;



?>
