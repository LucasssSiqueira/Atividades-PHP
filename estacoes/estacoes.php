<?php
header("Content-type:text/html; charset=utf8");
//variaveis
$msg = "";
$mes = " ";
//calculos
if(isset($_POST["mes"]) && !empty($_POST["mes"])){

    $mes = $_POST["mes"];


switch ( $mes){
    case "Janeiro":
        $msg =  "<h2>Nesse mês a estação é verão</h2> <br> <img src= 'img/verao.jpg'>" ;
break;

            case "Fevereiro":
                $msg =  "<h2>Nesse mês a estação é verão</h2> <br> <img src= 'img/verao.jpg'>" ;
                break;

                case "Março":
                    $msg = "<h2>Nesse mês a estação é verão</h2>"."<br>". "<img src= 'img/verao.jpg'>" ;
                        break;

                        case "Abril":
                            $msg = "<h2>Nesse mês a estação é outono</h2>"."<br>". "<img src= 'img/outono.jpg'>" ;
                            break;

                            case "Maio":
                                $msg = "<h2>Nesse mês a estação é outono</h2>"."<br>". "<img src= 'img/outono.jpg'>" ;
                                break;

                                case "Junho":
                                    $msg = "<h2>Nesse mês a estação é outono</h2>"."<br>". "<img src= 'img/outono.jpg'>" ;
                                    break;

                                    case "Julho":
                                        $msg = "<h2>Nesse mês a estação é inverno</h2>"."<br>". "<img src= 'img/inverno.jpg'>" ;
                                        break;

                                        case "Agosto":
                                            $msg = "<h2>Nesse mês a estação é inverno</h2>"."<br>". "<img src= 'img/inverno.jpg'>" ;
                                            break;

                                            case "Setembro":
                                                $msg = "<h2>Nesse mês a estação é inverno</h2>"."<br>". "<img src= 'img/inverno.jpg'>" ;
                                                break;

                                                case "Outubro":
                                                    $msg = "<h2>Nesse mês a estação é primavera</h2>"."<br>". "<img src= 'img/primavera.jpg'>" ;
                                                    break;

                                                    case "Novembro":
                                                        $msg = "<h2>Nesse mês a estação é primavera</h2>"."<br>". "<img src= 'img/primavera.jpg'>" ;
                                                        break;

                                                        case "Dezembro":
                                                            $msg = "<h2>Nesse mês a estação é primavera</h2>"."<br>". "<img src= 'img/primavera.jpg'>" ;
                                                            break;



}
    echo "<h1>Descubra as estações de cada mês</h1>";
    echo "$msg <br>";
}










?>

