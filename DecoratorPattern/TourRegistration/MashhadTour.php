<?php

namespace DecoratorPattern\TourRegistartion;
/**
 *
 */
class MashhadTour implements Tour
{
  private $price;

  public function setPrice($price)
  {
    $this->price = $price;
  }

  public function getPrice()
  {
    return $this->price;
  }
}

 ?>
