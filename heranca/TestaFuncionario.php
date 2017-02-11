<?php

require_once 'Secretario.php';
require_once 'Gerente.php';



$gerente = new Gerente;
$gerente->nome = "Joelma";
$gerente->salario = 12000;
$gerente->senha = 1234;

$bonus = $gerente->calculaBonus();



echo "Nome do gerente: $gerente->nome" . PHP_EOL;
echo "Salário do gerente: $gerente->salario" . PHP_EOL;
echo "Senha: $gerente->senha" . PHP_EOL;

echo "Bônus do gerente: $bonus" . PHP_EOL;
