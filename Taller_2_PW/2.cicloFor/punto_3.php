<?php 

	echo "solucionar el factorial de un numero<br><br>";

	$factorial=1;

	for ($i=1; $i <11; $i++) {

		$factorial=$factorial*$i;
		echo " * ".$i;

	}
	echo " = ".$factorial;

 ?>