<?php

class Conta {

  public $numero; // Atributo do objeto
  public $saldo; // Atributo do objeto
  public static $contador; // Atributo da CLASSE

  public function __construct()
  {
    self::$contador++;
  }

  // Método da classe
  public static function zeraContador()
  {
    // Envia email

    

    echo "zeraContador sendo chamado" . PHP_EOL;

    self::$contador = 0;

  }

}
