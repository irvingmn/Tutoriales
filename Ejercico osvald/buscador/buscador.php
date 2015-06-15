<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
<form name="form1" method="post" action="buscador.php" id="cdr">
	<h2>buscar folio</h2>
    <input name="busca" type="text" id="busqueda">
    <input type="submit" name="submit" value="Buscar">
 </form>
 <?php
 $busca="";
 $busca=$_POST['busca'];
 mysql_connect("localhost","root1","1234") or die ("ERROR, NO SE PUDO CONECTAR");
 mysql_select_db("administracion") or die("ERROR DE LA BASE DE DATOS");
 if($busca!=""){
	 	$busqueda= mysql_query("select * from clientes where nombre like '%".$busca."%'");
	 }
 ?>
<?php
	while($muestra= mysql_fetch_array($busqueda))
	{
		echo'<tr>';
		echo'<td>'.$muestra['id'].'</td>';
		echo'<td>'.$muestra['nombre'].'</td>';
		echo'<td>'.$muestra['telefono'].'</td>';
		echo'<td>'.$muestra['edad'].'</td>';
		}
?>

</body>
</html>