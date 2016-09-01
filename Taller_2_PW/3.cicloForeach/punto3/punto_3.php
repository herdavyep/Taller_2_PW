<?php 
    
	echo "ordenamiento descendente de cinco numeros ingresados por el usuario<br><br>";

	$n1=$_POST['num1'];
	$n2=$_POST['num2'];
	$n3=$_POST['num3'];
	$n4=$_POST['num4'];
	$n5=$_POST['num5'];

	$n1=(int)$n1;
	$n2=(int)$n2;
	$n3=(int)$n3;
	$n4=(int)$n4;
	$n5=(int)$n5;

	$numeros = array($n1,$n2,$n3,$n4,$n5);
	arsort($numeros);
	foreach ($numeros as $numero ) {
    echo "$numero<br>";
}

 ?>