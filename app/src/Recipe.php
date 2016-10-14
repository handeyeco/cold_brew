<?php

class Recipe {

  private $brand_id;
  private $blend_id;
  private $coffee_pounds;
  private $water_gallons;
  private $rating;
  private $created;
  private $id;

  function __construct($brand_id, $blend_id, $coffee_pounds, $water_gallons, $rating, $description, $created = null, $id = null) {
    $this->brand_id       = (int) $brand_id;
    $this->blend_id       = (int) $blend_id;
    $this->coffee_pounds  = (float) $coffee_pounds;
    $this->water_gallons  = (float) $water_gallons;
    $this->rating         = (int) $rating;
    $this->description    = (string) $description;
    $this->created        = (int) $created;
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
    return $this->blend_id;
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

  function setDescription($new_description) {
    $this->description = (string) $new_description;
  }

  function getDescription() {
    return $this->description;
  }

  function getCreated() {
    return $this->created;
  }

  function getId() {
    return $this->id;
  }

  /**
   * Saves object to database
   *
   * Assigns object id to database insert id
   *
   * Assign object created to submission timestamp
   */
  function save() {
    $brand_id       = $this->getBrandId();
    $blend_id       = $this->getBlendId();
    $coffee_pounds  = $this->getCoffeePounds();
    $water_gallons  = $this->getWaterGallons();
    $rating         = $this->getRating();
    $description    = $this->getDescription();
    $created        = time();


    $GLOBALS['DB']->exec("INSERT INTO
      recipes (brand_id, blend_id, coffee_pounds, water_gallons, rating, description, created)
      VALUES ($brand_id, $blend_id, $coffee_pounds, $water_gallons, $rating, '$description', $created)");

    $this->id       = $GLOBALS['DB']->lastInsertId();
    $this->created  = $created;
  }

  /**
   * Queries database for all entries in Recipes table
   *
   * Returns array of Recipe objects or an empty array if none where found
   *
   * @return array
   */
  static function getAll() {
    $query = $GLOBALS['DB']->query("SELECT * FROM recipes");
    $result = array();

    foreach ($query as $recipe) {
      $brand_id       = $recipe['brand_id'];
      $blend_id       = $recipe['blend_id'];
      $coffee_pounds  = $recipe['coffee_pounds'];
      $water_gallons  = $recipe['water_gallons'];
      $rating         = $recipe['rating'];
      $description    = $recipe['description'];
      $created        = $recipe['created'];
      $id             = $recipe['id'];

      $new_recipe = new Recipe($brand_id, $blend_id, $coffee_pounds, $water_gallons, $rating, $description, $created, $id);
      array_push($result, $new_recipe);
    }

    return $result;
  }

  /**
   * Clear Recipes table in database
   */
  static function deleteAll() {
    $GLOBALS['DB']->exec("DELETE FROM recipes");
  }

}

?>
