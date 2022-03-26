<?php
header("Content-type:text/html;charset=utf8;");

require_once "classes/Usuarios.php";

$Usuarios= new Usuarios();
if(isset($_POST["salvar"])) {
    $Usuarios->inserir();
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
        <h1 class="text-center">Cadastre-se</h1>
        <form action="cadusers.php" method="post">

            <div class="form-group">
                <label for="NOME">Informe o Nome </label><br>
                <input type="text"  id="NOME" name="NOME" class="form-control" required >  </div>

            <div class="form-group">
                <label for="email">Digite o email </label><br>
                <input type="email"  id="email" name="EMAIL" class="form-control"  required  >  </div>

            <div class="form-group">
                <label for="senha">Digite a senha </label><br>
                <input type="password"  id="senha" name="SENHA" class="form-control" required >  </div>

            <div class="form-group">
                <label for="categoria">Informe o telefone </label><br>
                <input type="text"  id="categoria" name="TELEFONE" class="form-control" oninput="mascara_telefone()"  maxlength="14" required >  </div>

            <div class="form-group">
                <label for="endereco">Informe o endereço </label><br>
                <input type="text"  id="endereco" name="ENDERECO" class="form-control" required >  </div>

            <div class="form-group">
                <select class="custom-select" required name="SEXO" >
                    <option value="">Selecione o sexo </option>
                    <option  value="F">Feminino </option>
                    <option value="M">Masculino </option>
                    <option value="no">Não mencionar </option>
                </select>
            </div>


            <button class="btn btn-dark"  type="submit" name="salvar">Salvar</button>
            <a class="btn btn-dark" href="index.html">Voltar</a>



        </form>
    </div>
</div>
<script> function mascara_telefone() {
        var tel_formatado = document.getElementById("categoria").value
        if(tel_formatado[0]!="(")
        {
            if(tel_formatado[0]!=undefined)
            {
                document.getElementById("categoria").value="("+tel_formatado[0]
            }
        }
        if (tel_formatado[3]!=")")
        {
            if (tel_formatado[3]!=undefined)
            {
                document.getElementById("categoria").value=tel_formatado.slice(0,3)+")"+tel_formatado[3]
            }
        }
        if (tel_formatado[9]!="-")
        {
            if (tel_formatado[9]!=undefined)
            {
                document.getElementById("categoria").value=tel_formatado.slice(0,9)+"-"+tel_formatado[9]
            }
        }
    }




</script>
</body>
</html>
