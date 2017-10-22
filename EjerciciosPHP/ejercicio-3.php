<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <title>Ejercicios en PHP</title>     
</head>

<body style="background-image: url(img/img4.png)">
<center>
<h1>Programacion de aplicaciones web</h1>
    <?php
    echo "<h2>BUCLE WHILE</h2><br>";
    echo "<table id=tb border = 1>";    
    
    $i=0;
    while ($i<10){
        echo "<tr>";
        echo "<td>";
        echo "<center>Linea $i <br>";
        echo "</td>";
        $i++;
    }
    
    echo "</tr>";
    echo "</table>";
    ?>
    </center>
    <br>
    <br>
    <p>Daniel Alejandro Nucamendi Diaz</p>
    <a href="index.php"><button type="button" class="btn btn-outline-primary">Regresar a menu principal</button></a>
</body>
</html>