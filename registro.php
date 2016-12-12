<?php
 
//Configuracion de la conexion a base de datos
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = ""; 
  $bd_base = "tareaphp"; 
 
$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
mysql_select_db($bd_base, $con); 
 
//variables POST
  $nombre=$_POST['nombre'];
  $documento=$_POST['documento'];
  $email=$_POST['email'];
  $password=$_POST['password'];
//registra los datos del empleados
  $sql="INSERT INTO Personas (nombre, documento, email, pass) VALUES ('$nombre', '$documento', '$email', '$password')";
mysql_query($sql,$con) or die('Error. '.mysql_error());
 
include('consulta.php');
?>