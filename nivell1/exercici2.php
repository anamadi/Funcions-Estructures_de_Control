<?php
/* Per jugar a el "amagatall" se'ns ha demanat un programa que compti fins a 10. 
Però la persona que comptarà és una mica tramposa i ho farà comptant de dos en dos. 
Crea una funció que compti fins a 10, de 2 en 2, mostrant cada número del compte per pantalla. */

function contar()
{
    for($i=0; $i<=10; $i+=2)
    {
        if($i != 10)
        {
            echo "$i, ";
        }
        else 
        {
            echo "$i.";
        }
    }
}

contar();
?>