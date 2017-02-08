<?php

class Cliente {

  public $nome;
  public $codigo;

}

$cliente1 = new Cliente;
$cliente1->nome = "Rafael Cosentino";
$cliente1->codigo = 111;

echo "Nome do cliente1: $cliente->nome" . PHP_EOL;
echo "Código do cliente1: $cliente->codigo" . PHP_EOL;
