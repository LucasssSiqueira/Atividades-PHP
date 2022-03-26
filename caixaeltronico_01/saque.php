<?php
header("Content-type:text/html; charset=utf8");
//variaveis

$nota100 = 0;
$nota50  = 0;
$nota20  = 0;
$nota10  = 0;
$nota5   = 0;
$nota2   = 0;
$nota1   = 0;
$resto   = 0;

//entrada de dados html
if(isset($_POST["valor"])) {
    $valor = $_POST["valor"];
    $nota100 = floor($valor / 100);
    $resto = $valor % 100;


    $nota50 = floor($valor / 50);
    $resto = $valor % 50;

    $nota20 = floor($valor / 20);
    $resto = $valor % 20;

    $nota10 = floor($valor / 10);
    $resto = $valor % 10;

    $nota5 = floor($valor / 5);
    $resto = $valor % 5;

    $nota2 = floor($valor / 2);
    $resto = $valor % 2;



} else {
    header("Content-type:text/html; charset=utf8");

}



?>