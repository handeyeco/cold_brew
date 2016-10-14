#Cold Brew Journal

Building a full-stack Cold Brew Journal using PHP and Silex for my final Epicodus project. For more information on my PHP Epicodus work, check out these links:

* [PHP Coursework Repo](https://github.com/matthewbryancurtis/epicodus_php)
* [Learn to Program Website](https://www.learnhowtoprogram.com)

##Takeaways

###phpDoc Example

I want this project to be documented nicely. Looking into phpDocumentor.

```PHP
/**
 * Calculates sum of squares of an array
 *
 * Loops over each element in the array, squares it, and adds it to
 * total. Returns total.
 *
 * This function can also be implemented using array_reduce();
 *
 * @param array $arr
 * @return int
 * @throws Exception If element in array is not an integer
 */
function sumOfSquares($arr) {
    $total = 0;
    foreach ($arr as $val) {
        if (!is_int($val)) {
            throw new Exception("Element is not an integer!");
        }
        $total += $val * $val;
    }
    return $total;
}
```

Example from [Sitepoint](https://www.sitepoint.com/introduction-to-phpdoc/).

###Twig Partials

```HTML
<!-- partials/template/head.html.twig -->

<title>{% if pageTitle is defined %}{{ pageTitle }} -{% endif %} {{ siteTitle }}</title>
```

```HTML
<!-- index.html.twig -->

<head>
  {% include '/partials/template/head.html.twig' %}
</head>
```

The partial has access to the context of the file that's importing it. Really handy for keeping the length of template files down!

###Splitting the Controller

Splitting the controller into logical chunks is really easy in Silex.

```PHP
// recipe.php

$recipe = $app['controllers_factory'];

$recipe->get('/', function () use ($app) {
  return $app['twig']->render("recipe.html.twig");
});

$recipe->get('/{id}', function ($id) use ($app) {
  return $app['twig']->render("recipe.html.twig", array(
    "recipe" => Recipe::getById($id);
  ));
});

return $recipe;
```

```PHP
// app.php

$app->mount('recipe', include 'recipe.php')
```

Now going to `localhost:8000/recipe` takes the user to the recipe page and `localhost:8000/recipe/10` can take the user to recipe with the ID of 10. I'm not sure why Epicodus wouldn't have included this in the curriculum.
