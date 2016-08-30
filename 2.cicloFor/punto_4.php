<?php 

	echo "solucionar el numero fibonacci<br><br>";

	$n1=1;
	$n2=0;

	echo "0 - ";

	for ($i=0; $i <=30 ; $i++) 
	{ 
		$suma=$n1+$n2;
		$n1=$n2;
		$n2=$suma;
		echo $suma." - ";
	}

 ?>