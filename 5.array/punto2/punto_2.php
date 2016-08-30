<?php 

	$n1=$_POST['c1'];
	$n2=$_POST['c2'];

	$n1=(int)$n1;
	$n2=(int)$n2;


	for ($y=0; $y <=$n1 ; $y++) { 
			
			for ($x=0; $x <=$n2 ; $x++) { 

				echo $elArray[$y][$x]." - ";
			}
			echo "<br>";
		}



 ?>