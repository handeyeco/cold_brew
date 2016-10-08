<?php

/**
* @backupGlobals disabled
* @backupStaticAttributes disabled
*/

require_once __DIR__."/../src/Blend.php";

class BlendTest extends PHPUnit_Framework_TestCase {

  function test_construct () {
    $blend = new Blend("Andes Mountain Blend", 1);

    $this->assertEquals("Andes Mountain Blend", $blend->getBlend());
  }

}

?>
