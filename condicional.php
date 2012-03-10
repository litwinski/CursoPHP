<?php
$num = 0;

echo (null == $num) ? 'OK<br>' : 'N&Atilde;O OK<br>';
// O de cima é igual ao de baixo
if (null == $num)
{
    echo 'OK<br>';
}
else
{
    echo 'N&Atilde;O OK!!<br>';
}
// O de baixo é igual ao de cima
switch($num)
{
    case null:
        echo 'OK<br>';
        break;
    default:
        echo 'N&Atilde;O OK!!!!<br>';
}
echo '<hr>';

$num = 9;

if($num > 10 || $num < 1)
{
    echo 'ERRO!! Tem que ser entre 1 e 10<br>';
}
elseif (($num % 2) == 1)
{
    echo "$num &eacute; impar!<br>";
}
else
{
    echo "$num &eacute; par!<br>";
}

switch ($num)
{
    case 1:
        echo 'Entrou no 1<br>';
    case 3:
        echo 'Entrou no 3<br>';
    case 5:
        echo 'Entrou no 5<br>';
    case 7:
        echo 'Entrou no 7<br>';
    case 9:
        echo 'Entrou no 9<br>';
        echo 'IMPAR<br>';
        break;
    case 2:
    case 4:
    case 6:
    case 8:
    case 10:
        echo 'PAR<br>';
        break;
    default:
        echo 'ERRO!! Tem que ser entre 1 e 10<br>';
}

?>
