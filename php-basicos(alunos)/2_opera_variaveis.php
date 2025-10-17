<?php

// Montagem da URL:
// http://localhost/php-basicos/php-basicos(alunos)/2_opera_variaveis.php?numero1=10&numero2=5

// Variaveis que recebem valores pela URL (metodos GET)
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

// Verifica se os valores foram passados (isset)
// E converte para numeros inteiros 
if (isset($numero1) && ($numero2)) {
    $numero1 = (int) $numero1;
    $numero2 = (int) $numero2;
}
$soma = $numero1 + $numero2;
$sub = $numero1 - $numero2;
$multi = $numero1 * $numero2;
$div = $numero1 / $numero2;
echo "A soma é $soma <br>";
echo "A subtração é $sub <br>";
echo "A multiplicação é $multi <br>";
echo "A divisão é $div <br>";

?>
