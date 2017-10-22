<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <meta charset="UTF-8">
    <title>Ejercicios en PHP</title>    
</head>

<body style="background-image: url(img/img0.jpg)">
<h1>Programacion de aplicaciones web</h1>
<form action=""method="POST">
Primer valor<br>
    <input class="form-control" type="number" placeholder="Valor 1" name= "valor1">
   <br><br> Segundo valor<br>
    <input class="form-control" type="number" placeholder="Valor 2" name="valor2"><br>
    <br><br> tercer valor<br>
    <input class="form-control" type="number" placeholder="Valor 3" name="valor3"><br>
    
    <input type="submit" class="btn btn-primary btn-lg btn-block" name="calcular" value="Calcular">
</form>
<div id="lb">
    <center>
    <h4>
    <?php
if (isset($_POST['calcular'])){

    $n1 = $_POST ['valor1'];
    $n2 = $_POST['valor2'];
    $n3=$_POST['valor3'];

    
    if($n1=='' or $n2=='' or $n3=='')
    echo '<br>llene todos los campos.';
else{  
    echo "valor 1= $n1<br>";
    echo "valor 2= $n2<br>";
    echo "valor 3= $n3<br>"; 
    if($n1>$n2){
        if($n1>$n3){
            echo "El primer numero ($n1) es el mayor de los 3<br>";
        }
        elseif($n2>$n3){
            echo "El segundo numero ($n2) es el mayor e los 3 <br>";
        }
    }
    elseif($n2>$n3){
        echo "El segundo numero ($n2) es el mayor de los 3";
    }
    elseif(($n2==$n3 and $n2==$n1)or($n1==$n2 and $n1==$n3)or($n3==$n1 and $n2))
echo"Todos los numeros son iguales";
    else
    echo "El tercer numero($n3) es el mayor de los 3";
}       
}    
?>
</h4>
</center>
</div>
    <p>Daniel Alejandro Nucamendi Diaz</p>
    <a href="index.php"><button type="button" class="btn btn-outline-primary">Regresar a menu principal</button></a>
</body>
</html>