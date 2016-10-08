<?php

class Blend {

  private $blend;
  private $brand_id;
  private $id;

  function __construct($blend, $brand_id, $id = null) {
    $this->blend      = (string) $blend;
    $this->brand_id   = (int) $brand_id;
    $this->id         = (int) $id;
  }

  function setBlend($new_blend) {
    $this->blend = (string) $new_blend;
  }

  function getBlend() {
    return $this->blend;
  }

  function setBrandId($new_id) {
    $this->brand_id = (int) $new_id;
  }

  function getBrandId() {
    return $this->brand_id;
  }

  function getId() {
    return $this->id;
  }

}

?>
