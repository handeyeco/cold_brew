<?php

class Brand {

  private $brand;
  private $id;

  function __construct($brand, $id = null) {
    $this->brand  = (string) $brand;
    $this->id     = (int) $id;
  }

  function setBrand($new_brand) {
    $this->brand = (string) $new_brand;
  }

  function getBrand() {
    return $this->brand;
  }

  function getId() {
    return $this->id;
  }

}

?>
