<?php
header("Content-type:text/html; charset=utf8");
//variaveis
$peso = 0;
$altura = 0;
$nome = " ";
$msg = " ";

//calculos

if(isset($_POST["nome"]) && !empty($_POST["nome"])
    && isset($_POST["altura"]) && !empty($_POST["altura"])
    && isset($_POST["peso"]) && !empty($_POST["peso"])) {

    $nome = $_POST["nome"];
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $imc = number_format(($peso / ($altura * $altura)), 2);
    $img = " ";


    if ($imc <= 16) {
        $msg = "<label style='color: red'> IMC: peso deficitário</label>
        <img src= 'img/pesopena.png'>";

    } else if ($imc > 16 && $imc <= 18.5) {
        $msg = "<label style='color: greenyellow'> IMC: Abaixo do peso</label>";
        $img = "<img src= 'img/abaixo.png'>";

    } else if ($imc > 18.5 && $imc <= 25) {
        $msg= "<label style='color: aquamarine'> IMC:Peso normal</label>";
        $img = "<img src= 'img/normal.png'>";

    } else if ($imc > 25 && $imc <= 30) {
        $msg = "<label style='color: blue'> IMC: Acima do peso</label>";
        $img = "<img src= 'img/gordurinha.png'>";

    } else if ($imc > 30 && $imc <= 35) {
        $msg = "<label style='color: orange'>  IMC: Obesidade nível 1</label>";
        $img = "<img src= 'img/ob2.png'>";

    } else if ($imc > 35 && $imc <= 40) {
        $msg = "<label style='color: salmon'> IMC: Obesidade nível 2</label>";
        $img = "<img src= 'img/last.png'>";

    } else if ($imc > 40) {
        $msg = "<label style='color: deepskyblue'> IMC: Obesidade nível 3</label>";
        $img = "<img src= 'img/ob3.png'>";

    }
}
//saida
echo "<h1>Cálculo IMC</h1>";
echo "<br>Nome: " . $nome;
echo "<br>Peso: " . $peso;
echo "<br>Altura: " . $altura;
echo "<br>IMC: " . $imc;
echo "<br>$msg";
echo "<br>$img";


?>
