<?php
header("Content-type:text/html;charset=utf8;");

require_once "classes/Usuarios.php";

$Usuarios = new Usuarios();

if (isset($_POST["Logar"]))
    $Usuarios->Login();



?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>



<body>

<form action="index_users.php" method="post">
    <div class="main">
        <div class="frmlogin">
            <h1 class="text-center">Faça o login</h1>

            <form action="cadusers.php" method="post">


                <div class="form-group">
                    <label for="email">Digite o email </label><br>
                    <input class="form-control" type="email"   id="email" name="EMAIL"   required  >  </div>


                <div class="form-group">
                    <label for="senha">Digite a senha </label><br>
                    <input class="form-control" type="password"  id="senha" name="SENHA" required  >  </div>

                <button  class="btn btn-dark" type="submit" name="Entrar">Entrar</button>
                <a  class="btn btn-dark " href="cadusers.php">cadastrar</a>



            </form>

        </div>

    </div>
</form>
</body>
</html>

