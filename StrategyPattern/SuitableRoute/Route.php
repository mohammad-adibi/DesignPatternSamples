<?php

/*
*
* Author : Mohammad adibi
* email : mohammadadibi1365@gmail.com
*
*/

namespace StrategyPattern\SuitableRoute;

/**
 *
 */
interface Route
{
  public function setBeginning($lat, $lang)
  public function getBeginning()
  public function setDestination($lat, $lang)
  public function getDestination()
  public function getPath($beginning, $destination);
}


 ?>
