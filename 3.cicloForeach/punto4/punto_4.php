<?php 
    
	echo "Imprimir 5 nombres ingresados por el usuario<br><br>";

	$n1=$_POST['nom1'];
	$n2=$_POST['nom2'];
	$n3=$_POST['nom3'];
	$n4=$_POST['nom4'];
	$n5=$_POST['nom5'];

	$n1=(string)$n1;
	$n2=(string)$n2;
	$n3=(string)$n3;
	$n4=(string)$n4;
	$n5=(string)$n5;

	$nombres = array($n1,$n2,$n3,$n4,$n5);
	foreach ($nombres as $nombre ) {
    echo "$nombre<br>";
}

 ?>