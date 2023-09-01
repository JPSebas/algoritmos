<?php
function obtenerMayor($a, $b, $c) {
    if ($a >= $b && $a >= $c) {
        return $a;
    } elseif ($b >= $a && $b >= $c) {
        return $b;
    } else {
        return $c;
    }
}

function esTrianguloEquilatero($lado1, $lado2, $lado3) {
    if ($lado1 == $lado2 && $lado2 == $lado3) {
        return true;
    } else {
        return false;
    }
}

function calcularDescuento($precio, $descuento) {
    if ($descuento <= 0 || $descuento >= 100) {
        return "Error: el descuento debe ser un valor entre 0 y 100";
    } else {
        $descuentoAplicado = $precio * ($descuento / 100);
        $precioFinal = $precio - $descuentoAplicado;
        return $precioFinal;
    }
}

$numero1 = 10;
$numero2 = 20;
$numero3 = 30;

$mayor = obtenerMayor($numero1, $numero2, $numero3);
$esTrianguloEquilatero = esTrianguloEquilatero($numero1, $numero2, $numero3);
$precio = 100;
$descuento = 30;
$precioFinal = calcularDescuento($precio, $descuento);

echo "El mayor número entre $numero1, $numero2 y $numero3 es: $mayor <br>";
echo "¿Los números $numero1, $numero2 y $numero3 forman un triángulo equilátero?: ";
echo $esTrianguloEquilatero ? "Sí" : "No";
echo "<br>";
echo "El precio final con un descuento de $descuento% es: $precioFinal";
