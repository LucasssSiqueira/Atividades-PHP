<?php
// importar  arquivos
// include  importar  um arquivo  dar mensagem  de erro  e continuar  a execucao ( utilizado  para incluir  conteudos html)
// require importar  um arquivo  dar mensagem de erro  e parar  a execucao  (utilizado  toda vez que  tratarmos de classes)
// require_once  //  include_once ->  once  importar  uma unica vez o arquivo
// É OBRIGATORIO IMPORTAR O ARQUIVO , SIMILAR AO START_SESSION
require_once "Conexao.php";
class Usuarios
{
    // atributos

    public $ID;
    public $NOME;
    public $SEXO;
    public $EMAIL;
    public $ENDERECO;
    public $TELEFONE;
    public $SENHA;

    // metodos (select  / update/ insert / delete)
    //  metodo para  listar  todos alunos (select * from alunos)

    public function  listartodos(){

        try {
            // criar uma instancia  da classe  de conexao
            $bd =  new Conexao();
            //cria uma variavel  para receber a conexao
            $con= $bd->conectar();
            // criar o comando  sql  que sera  executado no servidor
            $sql = $con->prepare("select * from usuarios ");
            // executar  o comando sql
            $sql->execute();
            //testar se retornou  valores  da tabela alunos
            if ($sql->rowCount() > 0) {
                //retornar  os dados  para html
                return $result = $sql->fetchAll(PDO::FETCH_CLASS);
                // fetchAll -> trazer  todas as linhas // FETCH_CLASS-> Retornar  no formato  classe  ->  atributos
                // fetch_class -> alunos->MATRICULA
                //fetch_assoc  ->  alunos["MATRICULA"]


            }

        }catch(PDOException $msg){
            echo "Não  foi  possivel listar  os dados dos alunos {$msg->getMessage()} ";


        }

    }

    public  function  inserir ()
    {try{
        if(isset($_POST["NOME"]) &&  isset($_POST["SEXO"])){

            $this->NOME = $_POST["NOME"];
            $this->SEXO = $_POST["SEXO"];
            $this->EMAIL = $_POST["EMAIL"];
            $this->ENDERECO = $_POST["ENDERECO"];
            $this->TELEFONE = $_POST["TELEFONE"];
            $this->SENHA = $_POST["SENHA"];

            $bd= new Conexao();
            $con =$bd  ->conectar();
            $sql = $con->prepare("insert into usuarios(ID,NOME,SEXO,EMAIL,ENDERECO,TELEFONE,SENHA)
           values(null,?,?,?,?,?,?)");

            $sql->execute(array($this->NOME,$this->SEXO,$this->EMAIL,$this->ENDERECO,$this->TELEFONE,$this->SENHA));

            if($sql->rowCount()>0){header("location:index_users.php");}

        }else{header("location:cadusers.php");
        }


    }catch (PDOException $msg){echo "Não foi possivel acessar o site";}}

    public function  excluir($ID){
        try{
            // verificar  se recebeu a matricula
            if(isset($ID)){
                // preencher o atributo  com o valor  enviado pelo  formulario
                $this->ID=$ID;
                // instanciar  classe conexao
                $bd = new Conexao();
                //criar  o objeto  contento a conexao
                $con = $bd->conectar();
                // cria o  comando sql  para  enviar  ao banco
                $sql=$con->prepare("delete from usuarios where ID = ? ");
                // executar o comando passando o  parametro  matricula
                $sql->execute(array($this->ID));
                //testar  se retornou valores
                if($sql->rowCount()>0){
                    //se o aluno foi excluido  retornar  para a tela  index_users.php
                    header("location:index_users.php");

                }





            }else{
                // se o  usuario  nao selecionou  no codigo para  excluir
                // retornar para  index_users.php
                header("location:index_users.php");

            }



        }catch (PDOException $msg){
            echo "Não foi possivel  excluir os alunos: ".$msg->getMessage();
        }






    }

    public function  alterar(){
        try{
            // verificar  se recebeu  valores do  formulario
            if(isset($_POST["salvar"])) {

                $this->ID=$_GET["ID"];
                $this->NOME=$_POST["NOME"];
                $this->SEXO=$_POST["SEXO"];
                $this->EMAIL=$_POST["EMAIL"];
                $this->ENDERECO=$_POST["ENDERECO"];
                $this->TELEFONE=$_POST["TELEFONE"];
                $this->SENHA=$_POST["SENHA"];
                //  instanciar  classe conexao
                $bd = new Conexao();
                // criar o  objeto  contento  a conexao
                $con=$bd->conectar();

                // cria  o comando sql  para enviar  ao  banco  passando  parametros ?
                $sql= $con->prepare("update  usuarios  set  NOME = ?,SEXO = ?,EMAIL = ?,
                 ENDERECO = ?,TELEFONE = ?,SENHA = ? WHERE ID = ?            ");
                // executar  o comando  passando os  valores  recebidos  do formulario

                $sql->execute(array(
                    $this->NOME,
                    $this->SEXO,
                    $this->EMAIL,
                    $this->ENDERECO,
                    $this->TELEFONE,
                    $this->SENHA,
                    $this->ID
                ));
                // testar  se retornou valores
                if($sql->rowCount()>0){
                    //se conseguiu  alterar  no banco de dados retornar  para pagina  index_users.php
                    header("location:index_users.php");
                }



            }else{
                //se  o usuario não preencheu  os valores  devolver para  o index_users.php
                header("location:index_users.php");

            }






        }catch (PDOException $msg){
            echo "Não foi possivel  alterar o aluno  ".$msg->getMessage();
        }



    }

    public  function  listarid($ID){

        try{
            if(isset($ID)){
                $this->ID=$ID;
                // instanciar  classe conexao
                $bd=new Conexao();
                // criar o  objeto  contento a  conexao
                $con=$bd->conectar();
                // cria  o comando sql   para enviar  ao banco
                $sql=$con->prepare("Select *  from usuarios  where ID = ?");
                // executar o comando
                $sql->execute(array($this->ID));
                // testar  se retornou  valores
                if($sql->rowCount()>0){
                    // se  tem resultado  devolver os dados  do aluno  ao html
                    return  $result=$sql->fetchObject();
                    //  fetchAll ->  linhas/colunas


                }

            }




        }catch (PDOException $msg){
            echo"Não foi possivel  listar o aluno ".$msg->getMessage();
        }



    }

    public function  login  (){


        try {
            if (isset($_POST["EMAIL"])& isset($_POST["SENHA"])) {

                $this->EMAIL = $_POST["EMAIL"];
                $this->SENHA = $_POST["SENHA"];

                $bd = new Conexao();
                //cria uma variavel  para receber a conexao
                $con = $bd->conectar();
                // criar o comando  sql  que sera  executado no servidor
                $sql = $con->prepare("select * from usuarios where email=? AND senha=? ");
                // executar  o comando sql
                $sql->execute(array($this->EMAIL, $this->SENHA));
                //testar se retornou  valores  da tabela alunos
                if ($sql->rowCount() > 0) {

                    header("location:index_users.php");
                } else {
                    header("location: login.php");
                }

            }else{
                header("location:login.php");
            }


        }catch(PDOException $msg){
            echo "Não  foi  possivel listar  os dados dos alunos {$msg->getMessage()} ";
        }
    }





}