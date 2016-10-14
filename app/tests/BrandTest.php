<?php

/**
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/

require_once __DIR__."/../src/Brand.php";
require_once __DIR__."/../private/test_db_login.php";

class BrandTest extends PHPUnit_Framework_TestCase {

  function tearDown() {
    Brand::deleteAll();
  }

  function test_construct() {
    $brand = new Brand("Stumptown");

    $this->assertEquals("Stumptown", $brand->getBrand());
  }

  function test_save() {
    $brand = new Brand("Stumptown");

    $brand->save();
    $result = Brand::getAll();

    $this->assertEquals([$brand], $result);
  }

}

?>
