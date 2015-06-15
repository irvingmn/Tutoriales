<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="#">
</head>
<body>
<?php
	include("conectar.php");
	$v1="";

	if(isset($_POST['bb']))
	{
		$bob=$_POST['bb'];
	if($bob=="BUSCAR")
	{
		$b=$_POST['bus'];
		$sql=mysql_query("select * from clientes where id='$b'");
	while($lista=mysql_fetch_array($sql))
	{
		$v1=$lista[0];
	}//WHILE
	}//BOTON BUSCAR
	}//BUSCAR
?>

<form name="f1" action="index.php" method="post">
	Codigo:
<input type="text" name="id" size="10" placeholder="Id...." value="<?php echo $v1 ?>"/><p>
Buscar:
<input type="text" name="bus" size="30" plaholder="Buscar"/>

<input type="submit" value="BUSCAR" name="bb"/><p>
</form>
</body>
</html>