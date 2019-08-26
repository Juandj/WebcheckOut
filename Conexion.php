<?php
// Datos de la base de datos
$usuario = "root";
$password = "";
$servidor = "localhost";
$basededatos = "tienda_virtual";

//crear la conexion
$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
//valiar DB 
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

// crear una consultra
 
$consulta = "SELECT * FROM tb_productos where pd_id = 1";
//realizar la consulta
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
mysqli_close( $conexion );
var_dump($resultado);
?>
