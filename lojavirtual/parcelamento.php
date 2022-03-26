<?php
header("Content-type:text/html; charset=utf8");

// variaveis
$valor = 5000;
$parcela = 0;
$div = $valor/ $parcela;
$cont = 1;
$juros = 0;
//calculos
if(isset($_POST["parcela"]) && !empty($_POST["parcela"])){

    $parcela = $_POST["parcela"];

echo "<h1>Loja do Fera</h1><br>";
echo "<h2>Preço do Produto: R$5.000</h2><br>";
echo "<img src= 'img/iphone.jpg'><br><br>";

if($parcela>= 1 && $parcela<=10){
    echo "<h2>Valor da compra: $valor em $parcela</h2>";
}

while ($cont <= $parcela) {

    $div = ($valor/$parcela);
    echo "<h3>$i parcela: $div</h3> ";
    $i++;
}

if ($parcela >= 10){
    echo "<h2>Valor da compra: $valor em $parcela</h2>";
    while ($cont <= $parcela) {

        $div = 2.29*($valor/$parcela);
        echo "<h3>$i parcela: $div</h3> ";
        $i++;
    }
}

}

?>