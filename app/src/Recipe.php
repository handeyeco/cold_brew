<?php

class Recipe {

  private $brand_id;
  private $blend_id;
  private $coffee_pounds;
  private $water_gallons;
  private $rating;
  private $id;

  function __construct($brand_id, $blend_id, $coffee_pounds, $water_gallons, $rating, $description, $id = null) {
    $this->brand_id       = (int) $brand_id;
    $this->blend_id       = (int) $blend_id;
    $this->coffee_pounds  = (float) $coffee_pounds;
    $this->water_gallons  = (float) $water_gallons;
    $this->rating         = (int) $rating;
    $this->description    = (string) $description;
    $this->id             = (int) $id;
  }

  function setBrandId($new_id) {
    $this->brand_id = (int) $new_id;
  }

  function getBrandId() {
    return $this->brand_id;
  }

  function setBlendId($new_id) {
    $this->blend_id = (int) $new_id;
  }

  function getBlendId() {
    return $this->blends_id;
  }

  function setCoffeePounds($new_pounds) {
    $this->coffee_pounds = (float) $new_pounds;
  }

  function getCoffeePounds() {
    return $this->coffee_pounds;
  }

  function setWaterGallons($new_gallons) {
    $this->water_gallons = (float) $new_gallons;
  }

  function getWaterGallons() {
    return $this->water_gallons;
  }

  function setRating($new_rating) {
    $this->rating = (int) $new_rating;
  }

  function getRating() {
    return $this->rating;
  }

  function getId() {
    return $this->id;
  }

}

?>
