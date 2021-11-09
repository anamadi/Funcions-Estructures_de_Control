<?php
/* Imagina't que volem que compti fins a un nombre diferent de 10. Programa la funció perquè el final del compte estigui parametritzat. */

$numero = 50;

function contar($numero)
{
    for($i=0; $i<=$numero; $i+=2)
    {
        if($i != $numero)
        {
            echo "$i, ";
        }
        else 
        {
            echo "$i.<br/>";
        }
    }
}

contar($numero);

$numero = 30 ;

contar($numero);

?>