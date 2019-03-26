<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
</head>
<body>
	
 	
<?php
  $conexion=mysql_connect("localhost", "root", "11230830") or die("Problemas en la conexion");
  mysql_select_db("db_paletas", $conexion)or
  die("problemas en la selección de base de datos");
  mysql_query("insert into persona(nombres_razon_social,apellidos,id_tipo_documento,nro_documento,id_tipo_persona, correo, telefono) values
  ('$_REQUEST[nombres]', '$_REQUEST[apellidos]', '$_REQUEST[tipo_documento]', '$_REQUEST[nro_documento]', '$_REQUEST[tipo_persona]','$_REQUEST[correo]','$_REQUEST[telefono]')" ,$conexion) or die("Problemas en el select".mysql_error());
echo "Registrado correctamente"; 
 ?>

</tr>
</body>
</html>