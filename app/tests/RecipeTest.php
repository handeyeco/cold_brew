<?php

/**
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/

require_once __DIR__."/../src/Recipe.php";
require_once __DIR__."/../private/test_db_login.php";

class RecipeTest extends PHPUnit_Framework_TestCase {

  function tearDown() {
    Recipe::deleteAll();
  }

  function test_construct() {
    $recipe = new Recipe(1, 1, 1, 1, 5, "Awesome");

    $this->assertEquals(1, $recipe->getBrandId());
  }

  function test_save() {
    $recipe = new Recipe(1, 1, 1, 1, 5, "Awesome");

    $recipe->save();
    $result = Recipe::getAll();

    $this->assertEquals([$recipe], $result);
  }

  function test_getById() {
    $recipe = new Recipe(1, 1, 1, 1, 5, "Awesome", 1477448985, 1);
    $recipe2 = new Recipe(2, 2, 2, 2, 5, "Awesome", 1477448985, 2);

    $recipe->save();
    $recipe2->save();
    $id = $GLOBALS['DB']->lastInsertId();
    
    $result = Recipe::getById($id);

    $this->assertEquals($recipe2, $result);
  }

}

?>
