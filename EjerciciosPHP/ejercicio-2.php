<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <title>Ejercicios en PHP</title>    
</head>

<body style= "background-image: url(img/img.jpg)">
<center>
<h1>Programacion de aplicaciones web</h1>
    <?php
    echo "<table id=tb border = 1>";
    $n = 1;
    for ($n1=1; $n1<= 10; $n1++){
        echo "<tr>";
        for($n2=1; $n2<=10; $n2++){
            echo "<td> ",$n, "</td>";
            $n = $n + 1;
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <p>Daniel Alejandro Nucamendi Diaz</p>
    <a href="index.php"><button type="button" class="btn btn-outline-primary">Regresar a menu principal</button></a>
</body>
</html>