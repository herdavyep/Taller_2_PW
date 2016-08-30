<?php 
	
	echo "suma de los numeros pares desde 1 hasta 50<br><br>";

	$i=1;
	$suma=0;

	while ($i<= 50) {

		if (($i % 2) == 0) {

			$suma=$suma+$i;
			echo "+ ".$i;
		}

		$i++;

	}

	echo "= ".$suma;

 ?>