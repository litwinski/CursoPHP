<?php
$var = 0;
while ($var != 10)
{
    echo 'Numero '.$var.'<br>';
    $var++;
}

echo "<hr>";

$var = 0;
do
{
    echo 'Numero '.$var.'<br>';
    $var++;
} while ($var != 10);

echo "<hr>";

for ($var = 0; $var != 10; $var++)
{
    echo 'Numero '.$var.'<br>';
}

echo '<hr>';

for ($x = 0, $y = 0; $x <= 10; $x++, $y=$x*$x)
{
    echo "O quadrado de $x => $y<br>";
}

echo '<hr>';

$vet = array(1=>'Indice 1', 2=>'Indice 2', 3=>'Indice 3');
foreach($vet as $valor) {
  echo $valor . '<br>';
}
?>











