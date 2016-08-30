<?php 

	echo "Sumar los numeros del 1 al 100<br><br>";

	$i=1;
	$suma=0;

	while ( $i<= 100) {

		$suma=$suma+$i;
		echo "+ ".$i;
		$i++;
		
	}
	echo "= ".$suma;

 ?>