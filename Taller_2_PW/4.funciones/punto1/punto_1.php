<?php 

	echo "Potencia de un numero, base y exponente ingresados por el usuario<br><br>";

	$numero=$_POST['numero'];
	$exponente=$_POST['exponente'];

	$numero=(int)$numero;
	$exponente=(int)$exponente;

	function potencia($num,$expo)
	{
		$i=1;
		$potencia=1;
		while ( $i<= $expo) 
		{
			$potencia=$potencia*$num;
			$i++;
		}
		return $potencia;
	}
	potencia($numero,$exponente);
	echo potencia($numero,$exponente);
 ?>



