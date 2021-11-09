<?php
/* Imagina que som a una botiga on es ven
    Xocolata: 1 euro
    Xiclets: 0.50 euros
    Carmels: 1.50 euros
Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. Per exemple, que si comprem:
2 xocolates, 1 de xiclets i 1 de carmels, tinguem un programa que permeti anar afegint els subtotals a un total, tal que així:
funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5
Sent per tant el total, 4. */
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

function calcularPrecio($numero,$tipo){
    switch($tipo)
    {
        case "chocolate":
            return $numero*1;
        break;
        case "chicle":
            return $numero*0.5;
        break;

        case "caramelo":
            return $numero*1.5;
        break;
    }
    

}

echo "2 chocolates + 1 chicle + 1 caramelo = ";
echo calcularPrecio(2,"chocolate")." + ".calcularPrecio(1,"chicle")." + ".calcularPrecio(1,"caramelo")." = ";

$total = calcularPrecio(2,"chocolate")+calcularPrecio(1,"chicle")+calcularPrecio(1,"caramelo");
echo $total;
?>

