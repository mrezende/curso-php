<?php

$vetor = array(2, 3, 4, 5);

print_r($vetor);

$multiplicacao = 1;

foreach ($vetor as $numero) {
  $multiplicacao *= $numero;
}

$produto = array();

for($i = 0; $i < count($vetor); $i++)
{
  $produto[$i] = $multiplicacao / $vetor[$i];

}
print_r($produto);
