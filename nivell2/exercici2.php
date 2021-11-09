<?php
/* Escriu una funció que determini la quantitat total a pagar per una trucada telefònica d'acord a les següents premisses:
    Tota crida que duri menys de 3 minuts té un cost de 10 cèntims.
    Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims. */

function calcularPrecioLlamada($minutosLlamada)
{   
    $coste = 10;

    if($minutosLlamada > 3)
    {
        for($i=4; $i<=$minutosLlamada; $i++)
        {
            $coste += 5;
        } 
    }

    echo "La llamada tiene un coste de $coste céntimos<br/>";
   
}

echo "Llamada 10 minutos => ";
calcularPrecioLlamada(10);
echo "Llamada 2 minutos => ";
calcularPrecioLlamada(2);
echo "Llamada 3 minutos => ";
calcularPrecioLlamada(3);
echo "Llamada 6 minutos => ";
calcularPrecioLlamada(6);
?>

