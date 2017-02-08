<?php

require_once 'Cliente.php';
require_once 'CartaoDeCredito.php';

$cliente = new Cliente;
$cliente->nome = "Hannibal";
$cliente->codigo = 17;

$cartao = new CartaoDeCredito;
$cartao->numero = 4444;
$cartao->dataDeValidade = "12/11/2020";

$cartao->dono = $cliente;

echo "Número do cartao: $cartao->numero" . PHP_EOL;
echo "Data de validade: $cartao->dataDeValidade" . PHP_EOL;
echo "Nome do dono: {$cartao->dono->nome}" . PHP_EOL;
