<?php

/**
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/

require_once __DIR__."/../src/Recipe.php";

class RecipeTest extends PHPUnit_Framework_TestCase {

  function test_construct() {
    $recipe = new Recipe(1, 1, 1, 1, 5, "Awesome");

    $this->assertEquals(1, $recipe->getBrandId());
  }

}

?>
