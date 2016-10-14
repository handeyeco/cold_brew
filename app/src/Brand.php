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

  /**
   * Saves object to database
   *
   * Assigns object id to database insert id
   */
  function save() {
    $brand = $this->getBrand();

    $GLOBALS['DB']->exec("INSERT INTO brands (brand) VALUES ('$brand') ");

    $this->id = $GLOBALS['DB']->lastInsertId();
  }

  /**
   * Queries database for all entries in Brand
   *
   * Returns array of Brand objects or an empty array if none where found
   *
   * @return array
   */
  static function getAll() {
    $query = $GLOBALS['DB']->query("SELECT * FROM brands");
    $result = array();

    foreach ($query as $brand) {
      $name = $brand['brand'];
      $id   = $brand['id'];
      $new_brand = new Brand($name, $id);
      array_push($result, $new_brand);
    }

    return $result;
  }

  /**
   * Clear Brand table in database
   */
  static function deleteAll() {
    $GLOBALS['DB']->exec("DELETE FROM brands");
  }

}

?>
