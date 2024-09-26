<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Práctica 6 E5</title>
</head>
<body>
<?php
function ejercicioCinco($age, $sex, $titulo, $ban){

        echo '<div style="text-align: center;">';

        if($ban){
            if($age > 17 && $age < 36 && $sex == "F"){
                echo "<p><strong>Bienvenida, usted está en el rango de edad permitido.</strong></p>";
            }
            else{
                if($sex == "M"){
                    echo "<p><strong>Disculpe, usted no está autorizado para acceder.</strong></p>";
                }
                else{
                    echo "<p><strong>Disculpe, usted no está autorizada para acceder debido a que no entra en el rango de edad.</strong></p>";
                }
            }
        }
        else{
            echo "<p><strong>Se introdujo un valor inválido para la edad. Vuelva a intentarlo.</strong></p>";
        }

        echo '</div>';

    }
?>
</body>
</html>