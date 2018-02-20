<?php

/*
*
* Author : Mohammad adibi
* email : mohammadadibi1365@gmail.com
*
*/

namespace DecoratorPattern\TourRegistartion;

/**
 *
 */
interface Tour
{
  public function getPrice();

  // print invoice of tour
  public function printBill();
}


 ?>
