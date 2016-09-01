<?php 
$true=true;
$opcion = $_POST["opcion"];

switch ($opcion) {
	case 'a':
		$opcion= ord("a");
		break;
	case 'e':
		$opcion= ord("e");
		break;
	case 'i':
		$opcion= ord("i");
		break;
	case 'o':
		$opcion= ord("o");
		break;
	case 'u':
		$opcion= ord("u");
		break;

	default:
		$true=false;
		echo "No es una vocal";
		break;
}

if ($true) {
	echo $opcion;
}

 ?>