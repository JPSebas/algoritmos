<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <title>Algoritmo</title>
        <meta name="viewport" content="width=divece-width, initial-scale=1">
        <link rel="stylesheet" href="ejercicio.css">    
    </head>
    <body>
        <?php require('../encabezado.php');
    ?>
        <form action="valorestriangulo.php" method="post">
        <br> <a href='../homepage.php'>INICIO</a><br>
        <h3>VALORES DE UN TRIÁNGIULO</h3> 
            <label for="radio"><b>Base:</b></label> 
            <input type="number" id="base" name="base">   
            <br>
            <br>
            <label for="altura"><b>Altura:</b></label>
            <input type="number" id="altura" name="altura">  
           <br>  <br>
           <button id="boton1"><b>Calcular</b></button> 
        </form> 
        <br> 
        <?php 
        require('../piedepagina.php');
        
        ?>