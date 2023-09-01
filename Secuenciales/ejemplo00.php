<?php  
require ('../encabezado.php');
if (isset($_REQUEST['tabla'])) {
    $tabla =  $_REQUEST['tabla']; 
}
else {
    $tabla = ''; 
}

if (($tabla) != '') {

    $tablaN = intval($tabla);  
    if ($tablaN == 0 && $tabla != "0") { 
        echo  "ERROR DEBE INFORMAR UN VALOR NUMERICO...<br>intente nuevamente"; 
    } else {
    echo "<center><t1><b>Tabla del # $tablaN</b></t1><br><center><BR>"; 
    echo "<center><table border='1' color='red'></center>"; 
    echo "<tr><th>Multiplicando</th><th>Multiplicador</th><th>Resultado</th></tr>";  
    for ($i = 1; $i <= 10; $i++) {
        echo " <tr><td><center> $tablaN </center></td><td><center> x  $i </center></td><td><center> = " . ($i * $tablaN) . "</center></td></tr>";
}
echo "</table>";
}
} else {
    echo "No es posible realizar el proceso...<br>".
    "debe ingresar el parametro de la tabla a multiplicar"; 
}

echo "<br> <a href='../Secuenciales/tablamulti.php'>REGRESAR</a><br><br>";
require('../piedepagina.php');
?> 