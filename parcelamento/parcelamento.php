<?php
header("Content-type:text/html; charset=utf8");
//variaveis
$parcelamento = 0;
$juros = 1.5;
$valor = 0;
$qtd = 0;
$i = 1;
$operacao = 0;
//cálculos
if(isset($_POST["valor"]) && !empty($_POST["valor"])
    && isset($_POST["parcelamento"]) && !empty($_POST["parcelamento"])){
    $valor = $_POST["valor"];
    $parcelamento = $_POST["parcelamento"];

    echo "<h1>Valor das Parcelas</h1>";
while ($i <= $parcelamento){
    if ($parcelamento == 24) {
        $parcelamento = 24;
        $operacao = ($valor * $juros + $valor) / 24;
        echo "<h3>$i parcela: $operacao</h3> ";
        $i++;
    }

    if ($parcelamento == 36){
        $parcelamento = 36 ;
        $operacao = ($valor * $juros + $valor)/36;
        echo "<h3>$i parcela: $operacao)</h3> ";
        $i++;
    }

    if ($parcelamento == 48){
        $parcelamento = 48 ;
        $operacao = ($valor * $juros + $valor)/48;
        echo "<h3>$i parcela: $operacao</h3> ";
        $i++;
    }

}

}

?>