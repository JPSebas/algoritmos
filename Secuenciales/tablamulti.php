<!DOCTYPE html>
<html lang="es">

<head>
    <title> Ejercicios de Algoritmos</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./../css/stilo.css">
</head><br>

<br>

<body>
    <?php require('../encabezado.php');
    ?>
    <section id="sec1">
    <br> <center><a href='../homepage.php'>INICIO</a><br></center>
        <form action="ejemplo00.php" method="post">
            <h3>TABLAS DE MULTIPLICAR</h3>
            <label><b>Ingrese el # de la tabla de multiplicar</b></label> <br>
            <input type="number" name="tabla">
            <br>
            <br>
            <button id="boton1"><b>Generar Tabla</b></button>
            <br>
        </form>
    <br>
    </section>
    
    <?php 
        require('../piedepagina.php');
        
        ?>


</body>

</html>