<?php 

		$n1="";
	 	$n2="";
	 	$n3="";
	 	$n4="";
	 	$operacion="";
	 	$numerador="";
	 	$denominador="";


	if(isset($_POST["operacion"]))
	{
		if(!empty($_POST["operacion"]))
		{
			$operacion = trim($_POST["operacion"]);
		}
	}
	
   if(isset($_POST["c1"]))
	{
		if(trim($_POST["c1"]) != "")
		{
			$n1 = intval($_POST["c1"], 10);
		}
	}
	if(isset($_POST["c2"]))
	{
		if(trim($_POST["c2"]) != "")
		{
			$n2 = intval($_POST["c2"], 10);
		}
	}
	
	if(isset($_POST["c3"]))
	{
		if(trim($_POST["c3"]) != "")
		{
			$n3 = intval($_POST["c3"], 10);
		}
	}
	if(isset($_POST["c4"]))
	{
		if(trim($_POST["c4"]) != "")
		{
			$n4 = intval($_POST["c4"], 10);
		}
	}


		   function maximoComunDivisor($a,$b) 
			{
			    $ab=abs($a);
			    $bb=abs($b);
				for($i=1;$i<=$ab;$i++){
					if(($ab%$i==0) && ($bb%$i==0)){
						$resul=$i;
					}
				}
			      return $resul;
	  		}
	  		function minimoComunMultiplo($a,$b)
			{

				for($i=1;$i<=$a;$i++){
					if(($a%$i==0) && ($b%$i==0)){
						$mcd=$i;
					}
				}
			      $mcm=($a*$b)/$mcd;
			      return $mcm;
			}				
	  		

				$mcm=minimoComunMultiplo($n2,$n4); 


	   switch ($operacion) 

	  {
		case '+':
		     if ($n2==$n4) 
		     {
		     	$numerador=$n1+$n3;
		     	$denominador=$n2;
		     }else{
		     	$numerador=($mcm/$n2)*$n1 + ($mcm/$n4)*$n3;
		     	$denominador=$mcm;
		     }
			 break;

		case '-':
			 if ($n2==$n4) 
		     {
		     	$numerador=$n1-$n3;
		     	$denominador=$n2;
		     }else{
		     	$numerador=(($mcm/$n2)*$n1) - (($mcm/$n4)*$n3);
		     	$denominador=$mcm;
		     }
			 break; 

		case '*':

			$numerador=$n1*$n3;
			$denominador=$n2*$n4;
			break;

		case '/':
	         $numerador=$n1*$n4;
			 $denominador=$n2*$n3;
			 break;

		default: 
		echo "valor incorrecto";	 
		
	   }


	  		$mcd=maximoComunDivisor($numerador,$denominador);
	  		
	  		$numeradorFinal=$numerador/$mcd;
	  		$denominadorFinal=$denominador/$mcd;


	//calculadora ($operacion,$n1,$n2);
	//echo calculadora ($operacion,$n1,$n2,$n3,$n4);

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>funciones</title>
</head>
<body>
<h1>Calculadora de numeros fraccionarios</h1>
<!--
esto es un comentario
-->
<form action="punto_4.php" method="post" >
    <label>Ingrese las fracciones<br /><br /></label>
    <input type="text" name="c1" size="3" value="<?php echo $n1; ?>" />
    <input type="text" name="c3" size="3" value="<?php echo $n3; ?>"/>
    <input type="text" name="numerador" value="<?php echo $numeradorFinal; ?>" class="inputText" size ="3"><br />

    <input type="text" name="c2" size="3" value="<?php echo $n2; ?>"/>
    <input type="text" name="c4" size="3" value="<?php echo $n4; ?>"/>
    <input type="text" name="denominador" value="<?php echo $denominadorFinal; ?>" class="inputText" size ="3"><br />

    <!--<label>Selecciona la operacion:<br />
        <select name = "lista" >
    	    <option value = "sumar">sumar </option>
    	    <option value = "restar">restar </option>
    	    <option value = "multiplicar">multiplicar </option>
    	    <option value = "dividir">dividir</option>
        </select>
    </label><br />-->
    <input type="text" name="operacion" value="<?php echo $operacion; ?>" size ="3" class="inputText" required="" placeholder="Operador">
    <input type="submit" value="calcular" class="inputSubmit" /><br />
    <input type="reset" value="reset">
</form>

</body>
</html>









