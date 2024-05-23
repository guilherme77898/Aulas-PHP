<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula-06-php</title>
</head>
<body>
        <form action="06.php" method="get">
            <input type="text" name="numero">
            <input type="submit" value="enviar">








        </form>
</body>
</html>


<?php 
//switch case
$numero = $_GET;

switch($numero){
    case 1:
        echo "\nSegunda-Feira";
        break;
    case 2;
        echo "\nTerça-Feira";
        break;
    case 3:
        echo "\nQuarta-Feira";
        break;
    case 4:
        echo "\nQuinta-Feira";
        break;
    case 5:
        echo "\nSexta-Feira";
        break;
     case 6:
        echo"\nSábado";
        break;
    case 7:"\nDomingo";
        break;
        

    
        
        default:
        echo "\Digite um dia da Semana.";
}






?>