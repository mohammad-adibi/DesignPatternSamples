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
interface State
{
  public function insertCard();
  public function ejectCard();
  public function transaction();
  public function checkPassword();
}


 ?>
