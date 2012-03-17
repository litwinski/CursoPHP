<?php

function teste($palavra) {
  echo "Chamou a funcao teste<br>";
  echo $palavra;
}

$frase = 'Minha frase';
teste($frase);

echo "<hr>";

function potencia($base, $expoente) {
  for($resultado = 1, $i=0; $i<$expoente; $i++){
    $resultado *= $base;
  }
  return $resultado;
}
$resultado = potencia(2, 4);
echo $resultado;

echo '<hr>';

function fatorial($numero = 5)
{
    if ($numero < 0 || !is_integer($numero))
        return false;

    return ($numero == 1 || $numero == 0) ? 1 : $numero * fatorial($numero-1);
}

$num = 4;
$fat = fatorial(10);
if ($fat)
    echo $fat;
else
    echo 'Deu erro';

echo '<hr>';


function testeEscopo($frase) {
  $frase = 'Frase alterada na funcao';
  return $frase;
}
$frase = 'Teste 1';
$frase = testeEscopo($frase);
echo $frase;

?>
