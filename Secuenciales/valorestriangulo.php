<?php
require ('../encabezado.php');
        $base = $_POST ['base'];  
        $altura = $_POST['altura']; 
        $resultado = ($base * $altura / 2); 

        $_SESSION['resultado'] = $resultado; 
        echo "<center><b><FONT SIZE='5.5' COLOR='blue'>RESULTADOS...</FONT></b></center>"; 
        echo "<hr>";
        echo "<center><table border='2'>";  
        echo "<tr><td><FONT SIZE='4'>La base ingresada es: <td><center><FONT SIZE='4'>".$base."</center></td></td></tr>"; 
        echo "<td><FONT SIZE='4'>La altura ingresada es:"."<td><center><FONT SIZE='4'>".$altura."</center></td>"."</td></tr>";  

        if(isset($_SESSION['resultado'])){  
            echo "<tr><td><FONT SIZE='4'>El Área del triángulo es: <td>".$_SESSION['resultado']."cm²</td></td></tr>";
            unset($_SESSION['resultado']);   
        }  
        echo "</table></center>";  
        echo "<br> <a href='../Secuenciales/tablamulti.php'>REGRESAR</a><br><br>";
require('../piedepagina.php');
        ?>

        

