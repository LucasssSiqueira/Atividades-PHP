<?php
// importar um arquivo
require_once "Usuarios.php";

// criar uma instancia da classe
$Usuarios= new Usuarios(); // criando um objeto do tipo classe
//criando variavel para receber a conexao
$listadeusuarios = $Usuarios->listartodos();

var_dump($listadeusuarios);
?>


