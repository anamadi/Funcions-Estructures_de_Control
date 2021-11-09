<?php
/* Escriure una funciò per verificar el grau de un estudiant en d'acord a la nota.

Condicions

    Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
    Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
    Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
    Si la nota és menor a 33%, l'estudiant reprovarà.
 */

 function obtenerNota($nota)
 {
    if($nota >= 60)
    {
        echo "Primera División</br>";
    }
    else if($nota >= 45 && $nota <= 59)
    {
        echo "Segunda División<br/>";
    }
    else if($nota >= 33 && $nota <= 44)
    {
        echo "Tercera División<br/>";
    }else
    {
        echo "El alumno/a reproba<br/>";
    }
 }

echo "Alumne 1 => Nota 70% => ";
$nota = 70;
obtenerNota($nota);

echo "Alumne 2 => Nota 55% => ";
$nota = 55;
obtenerNota($nota);

echo "Alumne 3 => Nota 38% => ";
$nota = 38;
obtenerNota($nota);

echo "Alumne 4 => Nota 30% => ";
$nota = 30;
obtenerNota($nota);
?>