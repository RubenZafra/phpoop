<?php

class Mobile
{
  public $brand;
  public $model;
  public $year;
 
  public function __construct($brand, $model, $year)
  {
    $this->brand = $brand;
    $this->model = $model;
    $this->year = $year;
  }
  public function getBrandName()
  {
    return $this->brand;
  }
  public function getModelName()
  {
    return $this->model;
  }
  public function getYear()
  {
    return $this->year;
  }

  public function __destruct(){
        echo 'Destroying object.';
  }
}

?>
