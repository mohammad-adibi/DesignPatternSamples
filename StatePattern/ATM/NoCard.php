<?php

/*
*
* Author : Mohammad adibi
* email : mohammadadibi1365@gmail.com
*
*/

namespace StatePattern\ATM;

/**
 *
 */
class NoCard implements State
{
  ATM $atm;

  public function __construct(ATM $atm)
  {
    $this->atm = $atm;
  }
  public function insertCard()
  {
    echo "Please type your password";
    $atm->setState($atm->checkPasswordState());
  }
  public function ejectCard()
  {
    $atm->setState($atm->ejectCardState());
    echo "Please Pick Up Your Card";
  }
  public function transaction(){
    echo "Please type your password";
  }
}


 ?>
