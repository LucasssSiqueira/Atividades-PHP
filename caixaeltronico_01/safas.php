<?php

header("Content-type: text/html; charset=utf8");

$email = "";
$senha = 0;
$login_aluno = "aluno@aluno.com";
$senha_aluno = "123456";
$login_professor = "professor@professor.com";
$senha_professor = "1234";
$login_funcionario = "funcionario@funcionario.com";
$senha_funcionario = "12345";
$cont = 1;

if (isset($_POST["Email"]) && !empty($_POST["Email"])
    && isset($_POST["Senha"]) && !empty($_POST["Senha"]) &&
    isset($_POST["tipo"]) && !empty($_POST["tipo"])) {

    $email = $_POST["Email"];
    $tipo = $_POST["tipo"];
    $senha = $_POST["Senha"];

    switch ($tipo) {
        case "aluno":
            break;
        case "professor":
            break;
        case "funcionario":
            break;

    }

    while ($email == $login_aluno && $senha == $senha_aluno && $cont <= 1) {
        switch ($tipo) {
            case "aluno":
                echo "<h1> Bem Vindo </h1>";
                break;
            case "professor":
                echo "<h1>Usuario ou Senha incorretos </h1>";
                break;
            case "funcionario":
                echo "<h1>Usuario ou Senha incorretos</h1>";
                break;
        }
        $cont++;
    }

    while ($email == $login_professor && $senha == $senha_professor && $cont <= 1) {
        switch ($tipo) {
            case "aluno":
                echo "<h1>Usuario ou Senha incorretos </h1>";
                break;
            case "professor":
                echo "<h1>Bem Vindo </h1>";
                break;
            case "funcionario":
                echo "<h1>Usuario ou Senha incorretos</h1>";
                break;
        }
        $cont++;
    }

    while ($email == $login_funcionario && $senha == $senha_funcionario && $cont <= 1) {
        switch ($tipo) {
            case "aluno":
                echo "<h1>Usuario ou Senha incorretos </h1>";
                break;
            case "professor":
                echo "<h1>Usuario ou Senha incorretos  </h1>";
                break;
            case "funcionario":
                echo "<h1>Bem Vindo</h1>";
                break;
        }
        $cont++;
    }


} else {
    header("location; index.html");
}
?>
