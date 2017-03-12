<?php
/*$servidor="localhost";
$usuario="root";
$pwd="alex";
$BD="servcios_libres";*/

$servidor="mysql.hostinger.mx";
$usuario="u595225084_movil";
$pwd="tablas";
$BD="u595225084_movil";

$conn=mysqli_connect($servidor,$usuario,$pwd,$BD)or die("Error al conectarse a la base de datos".mysqli_error());
?>
