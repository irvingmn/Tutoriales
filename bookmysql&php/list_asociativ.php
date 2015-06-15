<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
	$semana= array("lunes","martes","miercoles","jueves","viernes","sabado","domingo");
	echo count($semana).'<br>';
	reset($semana);// mueve el puntero al primer dia
	echo current ($semana).'<br>';// lunes
	next($semana);
	echo pos($semana).'<br>';//martes
	end($semana);
	echo pos($semana).'<br>';//domingo
	prev($semana);
	echo current($semana);//sabado
?>

<p>
<?php   
	$visitas = array("lunes"=>200, "martes"=>186, "miércoles"=>190, "jueves"=>175); 
	reset($visitas);
	// each()devuelve el valor del elemento actual, en este caso, el valor del elemento actual y su clave, y desplaza el puntero al siguiente, 
	//cuando llega al final devuelve FALSO, y termina el bucle while().  
	while (list($clave, $valor) = each($visitas)) { 
		echo "el día $clave ha tenido $valor visitas<BR>"; 
	} 
?>
<p>
<?php
	$calendario[] = array(1,'Enero' , 31);
	$calendario[] = array(2,'Febrero' ,28);
	$calendario[] = array(3,'Marzo' , 23);
	$calendario[] = array(4,'Abril' , 31);
	$calendario[] = array(5,'Mayo' , 26);
	while (list($clave, $valor)= each($calendario)) {
		$cadena= $valor[1];
		$cadena .=" es el mes numero ". $valor[0] ;
		$cadena .=" y tiene ". $valor[2]." dias<br>";
		echo $cadena;

	}
?>	
</body>
</html>