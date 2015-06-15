<?php
$conectar=mysql_connect("localhost","ejurispr_tester","PnvAEf&mM$4e")or die ("ERROR, NO SE PUDO CONECTAR");//EL SERVIDOR ES LOCAL EL NOMBRE DEL USUARIO Y LA CONTRASEÑA
mysql_select_db("ejurispr_activa2",$conectar)or die("ERROR DE LA BASE DE DATOS");//SELECCIONA LA BASE DE DATOS Y HACE LA CONEXION A ELLA Y MANDA UN MENSAJE DE ERROR SI LA CONEXION NO SE PUEDE REALIZAR
?>