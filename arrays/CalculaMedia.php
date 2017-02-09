<?php

// php CalculaMedia.php 1 2 3 4 5
// Média é: 3

$soma = 0;

for($i = 0; $i < count($argv); $i++)
{
  $soma += $argv[$i];
}

echo "Média é: " . ($soma/(count($argv) -1 )) . PHP_EOL;
