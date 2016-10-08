<?php

class Blend {

  private $blend;
  private $brand;
  private $id;

  function __construct($blend, $brand, $id = null) {
    $this->blend  = (string) $blend;
    $this->brand  = (int) $brand;
    $this->id     = (int) $id;
  }

  function setBlend($new_blend) {
    $this->blend = (string) $new_blend;
  }

  function getBlend() {
    return $this->blend;
  }

  function setBrand($new_brand) {
    $this->brand = (int) $new_brand;
  }

  function getBrand() {
    return $this->brand;
  }

  function getId() {
    return $this->id;
  }

}

?>
