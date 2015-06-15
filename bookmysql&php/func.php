<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>funciones</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		function mayor ($x, $y)
		{
			if ($x > $y) {
				return $x." es mayor que".$y;
			}else{
				return $y."es mayor que".$x;
			}

		}
	?>

</body>
</html>