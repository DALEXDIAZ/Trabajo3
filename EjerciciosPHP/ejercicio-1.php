<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <title>Ejercicios en PHP</title>    
</head>

<body style="background-image: url(img/img1.jpg)">
    <center>
    <h1>Programacion de aplicaciones web</h1>
</center>

<form action="" method="POST" name= "form1">
    Primer valor<br>
    <input class="form-control" type="number" placeholder="Valor 1" name= "valor1">
   <br><br> Segundo valor<br>
    <input class="form-control" type="number" placeholder="Valor 2" name="valor2"><br>
    <input type="submit" class="btn btn-primary btn-lg btn-block" name="calcular" value="Calcular">
</form>

    <br><br>
<div id="letra-blanc";>
    <?php
    if (isset($_POST['calcular'])){
        $num1 = $_POST ['valor1'];
        $num2 = $_POST['valor2'];
        if($num1=='' or $num2=='')
        echo '<br>llene todos los campos.';
    else{   
        //suma
        $operacion = $num1 + $num2;
        echo "$num1 + $num2 <br>";
        echo "Suma = $operacion <br>";
        //resta
        $operacion = $num1 - $num2;
        echo "$num1 - $num2 <br>";
        echo "Resta = $operacion <br>";
        //multiplicacion
        $operacion = $num1 * $num2;
        echo "$num1 x $num2 <br>";
        echo "Mulpicacion = $operacion <br>";
        //dividir
        $operacion = $num1 / $num2;
        $trunca = bcdiv($operacion,'1',3);
        echo "$num1 / $num2 <br>";
        echo "Divicion = $trunca <br>";
    }       
    }
    
    ?>
    </div>
<div id="pa">
    <p id="lb">Daniel ALejandro Nucamendi diaz</p>

    <a href="index.php"><button type="button" class="btn btn-outline-primary">Regresar a menu principal</button></a>
</div>
</body>
</html>