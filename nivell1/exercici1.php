<?php
/* Programa una funciò que, donat un número qualsevol(per exemple,la teva edat) ens digui si és parell o imparell mitjançant un missatge per pantalla. */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="number" name="numero"><br><br>
        <button name="enviar">Enviar</button><br><br>
    </form>
</body>
</html>
<?php
if(isset($_GET['enviar']))
{
    $numero = $_GET['numero'];

    function parImpar($numero){

        if($numero % 2 == 0)
        {
            echo "El número $numero es par<br/>.";
        }
        else
        {
            echo "El número $numero es impar<br/>.";
        } 

    }

    parImpar($numero);
    
} 
?>
