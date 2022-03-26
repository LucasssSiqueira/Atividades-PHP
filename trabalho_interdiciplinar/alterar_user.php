<?php
header("Content-type:text/html;charset=utf8;");

//  importar  a classe  Alunos

require_once "classes/Usuarios.php";
// instanciar   a classe Alunos
$Usuarios=New Usuarios();

// recuperar  os dados  do aluno  escolhido no  index_users.php

if(isset($_GET["ID"])){
    $dadosusuarios=$Usuarios->listarid($_GET["ID"]) ;

}
// chamando  a funcao  alterar  apos o usuario  clicar  no botao     salvar
if(isset($_POST["salvar"])){
// chamar  a funcao alterar
    $Usuarios->alterar();

}


?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro escolar</title>


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>












<body>


<div class="main">
    <div class="frmlogin">
        <h1 class="text-center">Alterar dados do aluno</h1>
        <form action="alterar_user.php?id= <?php echo $dadosusuarios->ID;  ?>" method="post">
            <div class="form-group">

                <label for="NOME">Informe o Nome </label><br>
                <input type="text"  id="NOME" name="NOME" class="form-control" value="<?php echo $dadosusuarios->NOME; ?>"  >  </div>

            <div class="form-group">
                <label for="email">Digite o email </label><br>
                <input type="email"  id="email" name="EMAIL" class="form-control" value="<?php echo $dadosusuarios-> EMAIL;   ?>"   ></div>

            <div class="form-group">
                <label for="senha">Digite a senha </label><br>
                <input type="password"  id="senha" name="SENHA" class="form-control"  value="<?php echo $dadosusuarios-> SENHA;  ?>"  >  </div>

            <div class="form-group">
                <label for="categoria">Informe o telefone </label><br>
                <input type="number"  id="categoria" name="TELEFONE" class="form-control"  value="<?php echo $dadosusuarios->TELEFONE;  ?>"  >  </div>

            <div class="form-group">
                <label for="endereco">Informe o endereço </label><br>
                <input type="text"  id="endereco" name="ENDERECO" class="form-control" value="<?php echo $dadosusuarios->ENDERECO;   ?> "  >  </div>

            <div class="form-group">
                <div class="form-group">
                    <label for="SEXO">Informe seu sexo </label><br>
                    <select name="SEXO" class="form-control" >
                        <option value="">Selecione o sexo </option>
                        <option  value="F" <?php if($dadosusuarios->SEXO == "F"){echo "selected";} ?>>Feminino </option>
                        <option value="M"    <?php if($dadosusuarios->SEXO == "M"){echo "selected";} ?>>  Masculino </option>
                        <option value="no"     <?php if($dadosusuarios->SEXO == "no"){echo "selected";} ?>>  Não mencionar </option>
                    </select>
                </div>
            </div>


            <button class="btn btn-dark" type="submit" name="salvar">Salvar</button>

            <a class="btn btn-dark" href="index_users.php">Voltar</a>



        </form>
    </div>
</div>





</body>
</html>

