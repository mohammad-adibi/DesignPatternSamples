<?php



namespace DecoratorPattern\TourRegistartion;
 /**
  *
  */
 class Train extends TourDecorator
 {
   $private $price;

   function __construct(Tour $tour)
   {
     parent::__construct($tour);
   }

   public function setPrice($price)
   {
     $this->price = $price;
   }

   public function getPrice()
   {
     return $this->decoratedTour.getPrice() + $this->price;
   }
 }

 ?>
