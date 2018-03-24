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

public class RouteContext {
   private Route $route;

   public function __construct(Route $route){
      $this->route = $route;
   }

   public function showPath(){
      return $this->route->getPath();
   }
}

?>
