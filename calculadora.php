<?php

$operaçao=$_POST['operação'];
$valor_1=$_POST['valor1'];
$valor_2=$_POST['valor2'];

$operação_adicao = "Adição"; // significa a operação que o usuário escolheu
$operação_subtracao = "Subtração";
$operação_divisao = "Divisão";
$operação_multiplicacao = "Multiplicação";

//código abaixo serve para realizar os cálculos
$adicao = $valor_1 + $valor_2;
$subtracao = $valor_1 - $valor_2;
$divisao = $valor_1 / $valor_2;
$multiplicacao = $valor_1 * $valor_2;


if ($operaçao = $operação_adicao)
    echo "O resultado desta adição é $adicao";
else if ($operaçao = $operação_subtracao)
    echo "O resultado desta subtração é $subtracao";
else if ($operaçao = $operação_divisao)
    echo "O resultado desta divisão é $divisao";
else
    echo "O resultado desta multiplicação é $multiplicacao";

?>