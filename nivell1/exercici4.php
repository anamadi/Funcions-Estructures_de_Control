<?php
/* Per prevenir oblits a l'utilitzar la nostra meravellosa opció "amagatall" establirem un paràmetre per defecte igual a 10 a la funció que s'encarrega de fer aquest compte. */


function contar($numero=10)
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

contar();

$numero = 30 ;

contar($numero);
?>