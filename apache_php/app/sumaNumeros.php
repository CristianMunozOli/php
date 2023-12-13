<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_GET['num1'])){
            $num1=$_GET['num1'];
            $num2=$_GET['num2'];
            echo "La suma de ".$num1." y ".$num2." es ".$num1+$num2;
        }else{
            echo "No hay nada que sumar";
        }
    ?>
    <form action="sumaNumeros.php">
        <label for="">Número1</label>
        <input type="number" name="num1">
        <label for="">Número2</label>
        <input type="number" name="num2">
        <button>Sumar</button>
    </form>
</body>
</html>