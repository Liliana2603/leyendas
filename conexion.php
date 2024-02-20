<?php
 $conexion = mysqli_connect("localhost","root","","login-leyendas")or die("Problemas al Conectar");
 mysqli_select_db($conexion,"login-leyendas")or die("problemas al conectar con la base de datos");
?>