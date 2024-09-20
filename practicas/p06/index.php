<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 6</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php
  include 'src/funciones.php';
        if(isset($_GET['numero']))
        {
            $num = $_GET['numero'];
            eje1($num);
        }
    ?>

    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecweb/practicas/p04/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
    ?>

    <h2>Ejercicio 2</h2>
    <p>Secuencia compuesta por impar par e impar</p>
    <?php
        if(isset($_GET['ejecutar2']))
        {
            $e2 = $_GET['ejecutar2'];
            eje2($e2);
        }
    ?>

    <h2>Ejercicio 3</h2>
    <p>Multiplo de un número</p>
    <?php
        if(isset($_GET['numero2']))
        {
            $multi = $_GET['numero2'];
            eje3($multi);
        }
    ?>
</body>
</html>