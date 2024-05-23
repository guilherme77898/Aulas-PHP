<?php 
$estadoCivil =$_GET['estadoCivil'];
$nome = $_GET['nome'];

    switch($estadoCivil){
    case "1";
        $estadoCivil = "Solteiro (a)";
    break;
    case "2";
        $estadoCivil = "Casado (a)";
    break;
    case "3";
        $estadoCivil = "Divorciado (a)";
    break;
    case "4";
        $estadoCivil = "Viuvo (a)";
    break;
    case "5";
        $estadoCivil = "Uniao estavel";
    break;


    }
    echo "O Estado Civil do ".$nome." é ".$estadoCivil;
?>