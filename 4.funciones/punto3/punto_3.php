<?php 

	$operacion = $_POST['lista'];

	// condicion para no dejar ningun campo sin llenar

		$n1=$_POST['c1'];
	 	$n2=$_POST['c2'];

	 	$n1=(int)$n1;
	 	$n2=(int)$n2;

	function calculadora($operacion,$n1,$n2)
	{
	   
	   switch ($operacion) 

	  {
		case 'sumar':
		     $suma=$n1+$n2;
	         echo $n1." + ".$n2." = ".$suma;
			 break;

		case 'restar':
			 $resta=$n1-$n2;
			 echo $n1." - ".$n2." = ".$resta;
			 break; 

		case 'multiplicar':
			$multi=$n1*$n2;
			echo $n1." x ".$n2." = ".$multi;
			break;

		case 'dividir':
	         $divi=$n1/$n2;
			 echo $n1." / ".$n2." = ".$divi;
			 break;

		default: echo "No se a podido realizar la operacion";	 
		
	   }
	}
	//calculadora ($operacion,$n1,$n2);
	echo calculadora ($operacion,$n1,$n2);

?>






