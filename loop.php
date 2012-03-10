<?php
$var = 0;
while ($var != 10)
{
    echo 'Numero '.$var.'<br>';
    $var++;
}

for ($var = 0; $var != 10; $var++)
{
    echo 'Numero '.$var.'<br>';
}

echo '<hr>';

for ($x = 0, $y = 0; $x <= 10; $x++, $y=$x*$x)
{
    echo "O quadrado de $x => $y<br>";
}

?>
