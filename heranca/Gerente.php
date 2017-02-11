<?php

require_once 'Funcionario.php';

class Gerente extends Funcionario
{

  public $senha;

  // override, sobrescrita, reescrita de método
  public function calculaBonus()
  {
    return parent::calculaBonus() +  2 * $this->salario;
  }

}
