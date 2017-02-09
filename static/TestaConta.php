<?php

require_once 'Conta.php';

echo "Contador: " . Conta::$contador . PHP_EOL;


Conta::zeraContador();

echo "Contador após zeraContador: " . Conta::$contador . PHP_EOL;
