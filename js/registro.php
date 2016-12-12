<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "ajax"; 
 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
 
//variables POST
  $nombre=$_POST['nombre'];
  $documento=$_POST['documento'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
 echo "nombre: ".$nombre;
//registra los datos del empleados
  $sql="INSERT INTO empleados (nombre, documento, email, pass) VALUES ('$nombre', '$documento', '$email', '$pass')";
mysql_query($sql,$con) or die('Error. '.mysql_error());
 
include('consulta.php');
?>