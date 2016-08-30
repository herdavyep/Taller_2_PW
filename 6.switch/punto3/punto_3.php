<?php 
$true=true;
$opcion = $_POST["opcion"];

switch ($opcion) {
	case '0':
		$opcion= ord("0");
		break;
	case '1':
		$opcion= ord("1");
		break;
	case '2':
		$opcion= ord("2");
		break;
	case '3':
		$opcion= ord("3");
		break;
	case '4':
		$opcion= ord("4");
		break;
	case '5':
		$opcion= ord("5");
		break;
	case '6':
		$opcion= ord("6");
		break;
	case '7':
		$opcion= ord("7");
		break;
	case '8':
		$opcion= ord("8");
		break;
	case '9':
		$opcion= ord("9");
		break;

	default:
		$true=false;
		echo "No es un numero del [0-9]";
		break;
}

if ($true) {
	echo $opcion;
}

 ?>