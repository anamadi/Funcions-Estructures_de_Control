<?php
/* Charlie em va mossegar el dit!
Charlie et mossegarà el dit exactament el 50% del temps.
Escriu La funció isBitten () que retorna TRUE amb un 50% de probabilitat i FALSE en cas contrari.
Consell: pot ser que la funció rand () et resulti útil. */


function isBitten()
{
    $numero = rand(0,1);

    if($numero)
    {
        echo "TRUE<br/>";
    }
    else
    {
        echo "FALSE<br/>";
    }
}
echo "TRUE O FALSE: ";
isBitten();
echo "TRUE O FALSE: ";
isBitten();
echo "TRUE O FALSE: ";
isBitten();
?>