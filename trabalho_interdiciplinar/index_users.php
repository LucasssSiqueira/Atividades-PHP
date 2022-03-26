<?php
header("Content-type:text/html;charset=utf8;");

// inportar  a classe Alunos
require_once "classes/Usuarios.php";

// criar  a instancia da classe
$Usuarios=new Usuarios();
// criar a  lista de alunos
$listarusuarios=$Usuarios->listartodos();


//  chamando a  funcao  excluir  passando a  matricula escolhida   pelo usuario
if(isset($_GET["id"])){
    $Usuarios->excluir($_GET["id"]);
}



?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div class="container al">
    <div class="row">
        <div class="col-md-10">
            <div class="al">
                <h3>Lista de Usuários</h3>
            </div>
        </div>
        <div  class="col-md-2">

            <form action="cadusers.php">
                <button class="btn btn-info">Novo</button>
                <a class="btn btn-dark" href="index.html">Sair</a>
            </form>
        </div>
    </div>
    <table class="table table-bordered table-dark">
        <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereco</th>
            <th>Telefone</th>
            <th>Sexo</th>
        </tr>
        </thead>
        <tbody>


        <?php  if($listarusuarios):foreach ($listarusuarios as $Usuarios): ?>
            <tr>
                <td><?php echo $Usuarios->ID; ?></td>
                <td><?php echo $Usuarios->NOME; ?></td>
                <td><?php echo $Usuarios->EMAIL; ?></td>
                <td><?php echo $Usuarios->ENDERECO; ?></td>
                <td><?php echo $Usuarios->TELEFONE; ?></td>
                <td><?php echo $Usuarios->SEXO; ?></td>
                <td>

                    <a href="alterar_user.php?id=<?php echo $Usuarios->ID ;?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                    <a href="index_users.php?id=<?php echo  $Usuarios->ID; ?>" class="btn btn-secondary"><i class="fa fa-trash"></i></a>

                </td>

            </tr>
        <?php endforeach; ?>
        <?php else :  ?>
            <tr>

                <td colspan="5">Nenhum aluno cadastrado</td>

            </tr>
        <?php endif ?>

        </tbody>





    </table>




</div>
</body>
</html>







