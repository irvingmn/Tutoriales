<!doctype html>
<html>
<head>
	<title>php</title>
	<meta charset="utf-8">
</head> 
<body> 
<?php 

	$a= "Mundo";
	echo"hola $a ";
	$myvar = " Hola. Este es mi primer script en PHP <p> fuck up nigth"; 
	//Esto es un comentario es mi primer script en PHP \n"; 
	//Esto es un comentario 
	echo $myvar; 
?> 
<p>
<?php 
	$nombre= " ";
	if ($nombre == " "){  
		echo "Tú no tienes nombre"; 
	} 
	elseif (($nombre=="eva") OR ($nombre=="Eva")) { 
		echo "Tu nombre es EVA"; 
	} 
	else { 
		echo "Tu nombre es " . $nombre; 
	}
?>
<p>
<?php
	$dia="Viernes";
	switch ($dia) { 
		case "Lunes": 
		echo "Hoy es Lunes"; 
		break;

	 	case "Martes": 
	 		echo "Hoy es Martes"; 
	 		break;

	 	case "Miercoles": 
	 		echo "Hoy es Miercoles"; 
	 		break;

	 	case "Jueves": 
	 		echo "Hoy es Jueves"; 
	 		break;

	 	case "Viernes": 
	 		echo "Hoy es Viernes <p>"; 
	 		break;

	 	case "Sábado": 
	 		echo "Hoy es Sábado"; 
	 		break; 

	 	case "Domingo": 
	 		echo "Hoy es Domingo"; 
	 		break; 
	 	default: 
			echo "Esa cadena no corresponde a ningún día de la semana "; 
	}

	// ejemplo ciclo while
	$num=1;
	while($num < 10) {
		echo $num."<p>";
		$num++;
	}

	//ejemplo while con if
	$numero= -4 ;
	while ($numero <= 100) {
		echo $numero.", ";
		if ($numero == 30) {
			echo " Aqui se jodio el ciclo";
			break;
		}
		$numero++;
	}
?>
	<h2 style="margin: 0px">ejemplo de tabla en php</h2>
<?php  
	$ciudad = array("París", "Roma", "Sevilla", "Londres"); 
	//contamos el número de elementos de la tabla 
	$numelentos = count($ciudad); 
	//imprimimos todos los elementos de la tabla 
	for ($i=0; $i < $numelentos; $i++) 
		{ 
			print ("La ciudad $i es $ciudad[$i] <BR>\n"); 
		}
?> 
</body> 
</html>