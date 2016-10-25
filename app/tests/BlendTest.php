<?php

/**
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/

require_once __DIR__."/../src/Blend.php";
require_once __DIR__."/../private/test_db_login.php";

class BlendTest extends PHPUnit_Framework_TestCase {

  function tearDown() {
    Blend::deleteAll();
  }

  function test_construct () {
    $blend = new Blend("Andes Mountain Blend", 1);

    $this->assertEquals("Andes Mountain Blend", $blend->getBlend());
  }

  function test_getBrandId () {
    $blend = new Blend("Andes Mountain Blend", 1);

    $this->assertEquals(1, $blend->getBrandId());
  }

  function test_save() {
    $blend = new Blend("Andes Mountain Blend", 1);

    $blend->save();
    $result = Blend::getAll();

    $this->assertEquals([$blend], $result);
  }

}

?>
