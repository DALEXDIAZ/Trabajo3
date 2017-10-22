<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <title>Ejercicios en PHP</title>    
</head>

<body style="background-image: url(img/img3.jpg)">
<center>
<h1>Programacion de aplicaciones web</h1>
<form action=""method="POST">
Primer valor<br>
    <input class="form-control" type="number" placeholder="Valor 1" name= "valor1">
   <br><br> Segundo valor<br>
    <input class="form-control" type="number" placeholder="Valor 2" name="valor2"><br>
    <input type="submit" class="btn btn-primary btn-lg btn-block" name="calcular" value="Calcular">
</form>
</center>
<center>
    <?php
    
    if (isset($_POST['calcular'])){
        $n1 = $_POST ['valor1'];
        $n2 = $_POST['valor2'];
        if($n1=='' or $n2=='')
        echo '<br>llene todos los campos.';
    else{   
        echo "valor 1= $n1<br>";
        echo "valor 2= $n2<br>";
        if($n1>$n2){
            echo "<br><h3>El primer numero ($n1) es mayor que el segundo numero ($n2)</h3>";
        }
        elseif($n1 == $n2){
            echo "<br><h3>El primer numero ($n1) es igual al segundo numero ($n2)</h3>";
        }
        else{
            echo "<br><h3>El primer numero ($n1) es menor que el segundo numero ($n2)</h3>";
        }
    }       
    }    
    ?>
    </center>
    <br><p>Daniel Alejandro Nucamendi Diaz</p>
    <a href="index.php"><button type="button" class="btn btn-outline-primary">Regresar a menu principal</button></a>
</body>
</html>