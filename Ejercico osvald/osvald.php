<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<!-- TU FORMULARIO -->
<form action="osvald.php" method="POST">
<input type="text" name="reg">
<input type="submit" value="buscar">
</form>
<?php


if( isset($_POST['reg']) ){ // SI ESTA LA VARIABLE
	$conexion=mysqli_connect("localhost","root1","1234","administracion"); // CONEXION A LA BASE 
	$consulta=" SELECT * FROM clientes WHERE id='".$_POST['reg']."' "; // LA CONSULTA
	$resultset = $conexion -> query($consulta) or die("ERROR".$conexion->error); // SE EJECUTA LA CONSULTA Y SE GUARDA EN UN CONJUNTO DE REULTADOS
	$filas=$resultset->num_rows; // SE OBTIENE EL NUMERO DE REGISTROS QUE REGRESA LA CONSULTA
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