<?php
        $base= $_POST ['base'];  
        $bases= $_POST['bases']; 
        $resultado = ($base * $bases); 

        $_SESSION['resultado'] = $resultado; 
        echo "<center><b><FONT SIZE='5.5' COLOR='blue'>RESULTADOS...</FONT></b></center>"; 
        echo "<hr>";
        echo "<center><table border='2'>";  
        echo "<tr><td><FONT SIZE='4'>El lado 1 ingresado es: <td><center><FONT SIZE='4'>".$base."</center></td></td></tr>"; 
        echo "<td><FONT SIZE='4'>El lado 2 ingresado es:"."<td><center><FONT SIZE='4'>".$bases."</center></td>"."</td></tr>";  

        if(isset($_SESSION['resultado'])){  
            echo "<tr><td><FONT SIZE='4'>El Área del cuadrado es: <td>".$_SESSION['resultado']."cm²</td></td></tr>";
            unset($_SESSION['resultado']);   
        }  
        echo "</table></center>";  
        ?>