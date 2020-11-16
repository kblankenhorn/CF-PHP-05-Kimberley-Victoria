<?php
class Cars
{
  public $name;
  public $model;
  public $year;
  public $color;
  public $fuelType;


  function __construct($name_arg, $model_arg, $year_arg, $color_arg, $fuelType_arg)
  {
      $this->name   = $name_arg;
      $this->model  = $model_arg;
      $this ->year  = $year_arg;
      $this ->color  = $color_arg;
      $this ->fuelType  = $fuelType_arg;
  }
  public function addCars ()
  {
      $totalCars = $this->name . " " . $this->model . " " . $this ->year . " " . $this ->color . " with " . $this ->fuelType;
      return $totalCars;
  }
}
$myCars = new Cars( 'Audi', 'A5', '2020', 'black', 'diesel');
$auto = $myCars->addCars();
print  "You have $auto <br>";

class Ships
{
  public $name;
  public $model;
  public $year;
  public $color;
  public $fuelType;
  public $size;
  public $shippingType;



  function __construct($name_arg, $model_arg, $year_arg, $color_arg, $fuelType_arg, $size_arg, $shippingType_arg)
  {
      $this->name   = $name_arg;
      $this->model  = $model_arg;
      $this ->year  = $year_arg;
      $this ->color  = $color_arg; 
      $this ->fuelType  = $fuelType_arg;
      $this ->size = $size_arg;
      $this ->shippingType = $shippingType_arg;
  }
  public function addShips ()
  {
      $totalShips = $this->name . " " . $this->model . " " . $this ->year . " " . $this ->color . " with " . $this ->fuelType . " " . $this ->size . " " . $this ->shippingType;
      return $totalShips;
  }
}
$myShips = new Ships( 'Aida', '11223', '2020', 'White', 'diesel', 'big', 'passenger');
$ships = $myShips->addShips();
print  "You have $ships";
?>