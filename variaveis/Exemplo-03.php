<?php
$nome = "Hcode";
$site = "www.hcode.com.br";
////////////////////////////////////////
$ano = 1990;
$salario =  5500.99;
$bloqueado = false;
////////////////////////////////////////
$frutas = array("abacaxi", "laranja", "manga");
//echo $frutas[2];
////////////////////////////////////////

$nascimento = new DateTime();
//var_dump($nascimento); //mostra o tipo e o valor
////////////////////////////////////////

$arquivo = fopen("Exemplo-03.php", "r");
var_dump($arquivo);
?>
