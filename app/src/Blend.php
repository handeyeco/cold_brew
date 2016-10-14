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

  /**
   * Saves object to database
   *
   * Assigns object id to database insert id
   */
  function save() {
    $blend    = $this->getBlend();
    $brand_id = $this->getBrandId();

    $GLOBALS['DB']->exec("INSERT INTO blends (blend, brand_id) VALUES ('$blend', $brand_id)");
    $this->id = $GLOBALS['DB']->lastInsertId();
  }

  /**
   * Queries database for all entries in Blend
   *
   * Returns array of Blend objects or an empty array if none where found
   *
   * @return array
   */
  static function getAll() {
    $query = $GLOBALS['DB']->query("SELECT * FROM blends");
    $result = array();

    foreach ($query as $blend) {
      $name     = $blend['blend'];
      $brand_id = $blend['brand_id'];
      $id       = $blend['id'];

      $new_blend = new Blend($name, $brand_id, $id);
      array_push($result, $new_blend);
    }

    return $result;
  }

  /**
   * Clear Blend table in database
   */
  static function deleteAll() {
    $GLOBALS['DB']->exec("DELETE FROM blends");
  }

}

?>
