<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 4</title>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Determina cuál de las siguientes variables son válidas y explica por qué:</p>
    <p>$_myvar,  $_7var,  myvar,  $myvar,  $var7,  $_element1, $house*5</p>
    <?php
        //AQUI VA MI CÓDIGO PHP
        $_myvar;
        $_7var;
        //myvar;       // Inválida
        $myvar;
        $var7;
        $_element1;
        //$house*5;     // Invalida
        
        echo '<h4>Respuesta:</h4>';   
    
        echo '<ul>';
        echo '<li>$_myvar es válida porque inicia con guión bajo.</li>';
        echo '<li>$_7var es válida porque inicia con guión bajo.</li>';
        echo '<li>myvar es inválida porque no tiene el signo de dolar ($).</li>';
        echo '<li>$myvar es válida porque inicia con una letra.</li>';
        echo '<li>$var7 es válida porque inicia con una letra.</li>';
        echo '<li>$_element1 es válida porque inicia con guión bajo.</li>';
        echo '<li>$house*5 es inválida porque el símbolo * no está permitido.</li>';
        echo '</ul>';
    ?>

    <h2>Ejercicio 2</h2>
    <?php
	//Inciso 2
	$a = "ManejandoSQL";
	$b = 'MySQL';
	$c = &$a;
	echo $a;
	echo '<br>';
	echo $b;
	echo '<br>';
	echo $c;
	echo '<br>';

	echo '<br>';
	$a = "PHP server";
	$b = &$a;
	echo $a;
	echo '<br>';
	echo $b;
	echo '<br>';
	echo $c;
	echo '<br>';
    ?>
    <p>Al ocupar &$a relacionamos el valor de la variable con la variable a</p>
	
    <h2>Ejercicio 3</h2>
    <?php
	$a = "PHP5";
	echo $a;
	echo '<br>';

	$z[] = &$a;
	print_r($z);
	echo '<br>';

	$b = "5a version de PHP";
	echo $b;
	echo '<br>';

	$c = $b*10;
	echo $c;
	echo '<br>';

	$a .= $b;
	echo $a;
	echo '<br>';

	$b *= $c;
	echo $b;
	echo '<br>';

	$z[0] = "MySQL";
	print_r($z);
	echo '<br>';
    ?>

    <h2>Ejercicio 4</h2>
    <?php
	function test()
	{
		
		echo $GLOBALS["a"];
		echo '<br>';

		
		print_r($GLOBALS["z"]);
		echo '<br>';

		
		echo $GLOBALS["b"];
		echo '<br>';

		
		echo $GLOBALS["c"];
		echo '<br>';

		$a .= $b;
		echo $GLOBALS["a"];
		echo '<br>';

		$b *= $c;
		echo $GLOBALS["b"];
		echo '<br>';

		$z[0] = "MySQL";
		print_r($GLOBALS["z"]);
		echo '<br>';
	}
	$a = "PHP5";
	$z[] = &$a;
	$b = "5a version de PHP";
	$c = $b*10;
	test();
    ?>

    <h2>Ejercicio 5</h2>
    <?php
	$a = "7 personas";
	$b = (integer) $a;
	$a = "9E3";
	$c = (double) $a;

	echo $a;
	echo '<br>';

	echo $b;
	echo '<br>';

	echo $c;
	echo '<br>';
    ?>

    <h2>Ejercicio 6</h2>
    <?php
	$a = "0";
	$b = "TRUE";
	$c = "FALSE";
	$d = "$a OR $b";
	$e = "$a AND $b";
	$f = "$a XOR $b";
	
	var_dump($a);
	echo '<br>';
	var_dump($b);
	echo '<br>';
	var_dump($c);
	echo '<br>';
	var_dump($d);
	echo '<br>';
	var_dump($e);
	echo '<br>';
	var_dump($f);
	echo '<br>';

	echo var_export($c);
	echo '<br>';
	echo var_export($e);
	echo '<br>';

    ?>

    <h2>Ejercicio 7</h2>
    <?php
	echo "Version de Apache y PHP".$_SERVER['SERVER_SOFTWARE']."<br>";
	echo "Sistema operativo del servidor: ".php_uname()."<br>";
	echo "Idioma: ".$_SERVER['HTTP_ACCEPT_LANGUAGE']."<br>";
    ?>
</body>
</html>