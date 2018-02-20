<?php


namespace DecoratorPattern\TourRegistartion;
 /**
  *
  */
abstract class TourDecorator implements Tour
{
  protected Toure decoratedTour;

  public function __construct(Tour $tour)
  {
    $this->decoratedTour = $tour;
  }

  public function getPrice()
  {
    $this->decoratedTour->getPrice();
  }
}


 ?>
