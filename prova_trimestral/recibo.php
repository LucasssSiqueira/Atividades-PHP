<?php
//accept accents
header("Content-type:text/html; charset=utf8");

//variables
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$sexo = $_POST["sexo"];
$valor = $_POST["valor"];
$juros = null;
$parcelas = null;

//ENTRADA DE DADOS DO HTML
if((isset($_POST["nome"]) && !empty($_POST["nome"])) && (isset($_POST["telefone"]) && !empty($_POST["telefone"])) && (isset($_POST["genero"]) && !empty($_POST["genero"])) && (isset($_POST["preco"]) && !empty($_POST["preco"])) && (isset($_POST["email"]) && !empty($_POST["email"]))){

//Calculations
    if($valor <= 5000){
        $juros = 1.05;
    }elseif($valor > 5000 && $valor <= 7000){
        $juros = 1.04;
    }elseif($valor > 7000 && $valor <= 9000){
        $juros = 1.02;
    }else{
        $juros = 1.01;
    }

//screen
    echo "<img src= 'inter.png'></br>";
    echo "<br>Confirme seus Dados:</br>";
    echo "<br>Seu Nome: $nome";
    echo "<br>Seu Email: $email";
    echo "<br>Seu Telefone: $telefone";
    echo "<br>Seu Gênero: $sexo";
    echo "<br>Valor total do Intercâmbio: R$ $valor";

//installments calculation
    $parcelas=$valor/12;
    echo "<br>";
    echo "<br>";
    for($i=1; $i<13; $i++){
        if($i==1){
            echo "<br>{$i}° Parcela: R$ ".number_format($parcelas,2).".";
        }else{
            $parcelas*=$juros;
            echo "<br>{$i}° Parcela: R$ ".number_format($parcelas,2).".";
        }
    }
}else {
    header("Location: 'index.html'");
}
?>