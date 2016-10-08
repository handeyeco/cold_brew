<?php

/**
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/

require_once __DIR__."/../src/Brand.php";

class BrandTest extends PHPUnit_Framework_TestCase {

  function test_construct() {
    $brand = new Brand("Stumptown");

    $this->assertEquals("Stumptown", $brand->getBrand());
  }

}

?>
