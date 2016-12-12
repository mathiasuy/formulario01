<?php
  //Configuracion de la conexion a base de datos
    $bd_host = "localhost"; 
    $bd_usuario = "root"; 
    $bd_password = ""; 
    $bd_base = "tareaphp"; 
   
  	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
  	mysql_select_db($bd_base, $con); 
   
  //consulta todos los empleados
  $sql=mysql_query("SELECT * FROM Personas",$con);
?>
<table style="color:#000099;width:400px;">
	<tr style="background:#9BB;">
		<td>Nombre</td>
		<td>Documento</td>
		<td>Email</td>
    <td>Foto</td>
	</tr>
<?php
  while($row = mysql_fetch_array($sql)){
  echo "<tr>";
  	echo "<td>".$row['nombre']."</td>";
  	echo "<td>".$row['documento']."</td>";
    echo "<td>".$row['email']."</td>";
  	echo "<td><img src=img/".$row['documento'].".jpg</td>";
  	echo "</tr>";
  }
?>
</table>