<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<!-- TU FORMULARIO -->
<form action="verificar.php" method="POST">
<h2>Escribe el folio</h2>
<input type="text" name="reg">
<input type="submit" value="buscar">
</form>

<?php
if( isset($_POST['reg']) ){ 
	$conexion=mysqli_connect("e-jurisprudencia.com","ejurispr_temp","Bmg$8@f6{fiS","ejurispr_activa2"); 
	$consulta=" SELECT * FROM folio_web WHERE folio='".$_POST['reg']."' "; 
	$resultset = $conexion -> query($consulta) or die("ERROR".$conexion->error); // SE EJECUTA LA CONSULTA Y SE GUARDA EN UN CONJUNTO DE REULTADOS
	$filas=$resultset->num_rows; 
	if($filas>=1){ // SI HA ALMENOS 1 ES QUE SI EXISTE
		echo "Si se encontró el folio";
	}
	else{// SI NO, PUES NO EXISTE
		echo "No se encontró el folio";
	}
}
?>
</body>
</html>