<?php
  function eje1($num){
            if ($num%5==0 && $num%7==0)
            {
                echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
            }
            else
            {
                echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
            }//10
   }

   function eje2($e2){
	if($e2)
	{
	    $itera = 0;
	    while($e2)
	    {
		$mat[]=array($itera+1,3);
		for ($i=0; $i<=2; $i++)
		{
		    $mat[$itera][$i] = rand(100,1000);
		    echo $mat[$itera][$i], " ";
		}
		echo '<br>';
		if($mat[$itera][0]%2==1 && $mat[$itera][1]%2==0 && $mat[$itera][2]%2==1)
		{
		    $e2 = false;
		}
		$itera++;
	    }
	    echo ($itera*3), " números obtenidos en $itera iteraciones.";
	    echo '<br>';
	}
   }

   function eje3($multi){
   $e3 = true;
   $num;
	while($e3)
	{
	    $num = rand(1,1000);
	    if($num%$multi==0)
	    {
		$e3 = false;
	    }
	}
   echo "Resultado con while";
   echo '<br>';
   echo $num, " es multiplo de $multi.";
   echo '<br>';
   $e3 = true;
	do
	{
	    $num = rand(1,1000);
	    if($num%$multi==0)
	    {
		$e3 = false;
	    }
	}while($e3);
   echo "Resultado con do-while";
   echo '<br>';
   echo $num, " es multiplo de $multi.";
   echo '<br>';
   }
?>