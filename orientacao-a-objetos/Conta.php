<?php

//require_once('Cliente.php');

spl_autoload_register();

class Conta {

  public $numero;
  public $saldo;
  public $dono;

}

$cliente = new Cliente;
$cliente->nome = "Joao";

$conta = new Conta;
$conta->numero = 123;
$conta->saldo = 550;



$conta->dono = $cliente;

echo "Nome do dono da conta: {$conta->dono->nome}" . PHP_EOL;
