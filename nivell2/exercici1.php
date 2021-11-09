<?php
/* Ens han demanat un llistat de tots els anys on es van produir jocs olímpics desde 1960 inclós fins al 2016. Programa un bucle que calculi i mostri per pantalla els anys olímpics dins de l'interval esmentat. */
function mostrarAñosOlimpicos()
{
    echo "Años Olímpicos<br/>";
    for($i = 1960; $i <= 2016; $i += 4)
    {
        echo "$i<br/>";
    }
}

mostrarAñosOlimpicos();
?>