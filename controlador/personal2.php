<?php
$conexion=mysqli_connect('localhost','root','','personales');
 

    /*if ($resultado = $mysqli->query($consulta= "SELECT * FROM `personales`")) { // toda la consulta debe ir dentro ya que si esta afuera no es llamada
       while($fila = $resultado->fetch_row()){ // el fetch_row solo permite datos numericos de las tablas de base de datos
        echo $fila[0]." ". $fila[1]." ". $fila[2]." ". $fila[3]." ". $fila[4]." ". $fila[5]." ". $fila[6]." ". $fila[7]." ". $fila[8]."<br/>";
       } 
        //$resultado->close();
    }*/
/*	$resultado = $mysqli->query($consulta= "SELECT * FROM `personales`");
    if ($resultado = $mysqli->query($consulta= "SELECT * FROM `personales`")) { // toda la consulta debe ir dentro ya que si esta afuera no es llamada
        while($fila = $resultado->fetch_array()){ //el fetch_array permite poner nombre de las tablas
         echo $fila['id_personal']." ". $fila['nombre']." ". $fila['apellidop']." ". $fila['apellidom']." ". $fila['fecha_nacimiento']." ". $fila['ci']." ". $fila['celular']." ". $fila['direccion']." ". $fila['cargo']."<br/>";
        } 
       }*/
		//$resultado->close() 
     
    /* cerrar la conexión */
   // $mysqli->close();
   // mysqli_close($mysqli);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Datos del Personal</title>
</head>
<body>
	<table>
		<tr>
			<td>nombre</td>
			<td>apellido paterno</td>
			<td>apellido materno</td>
			<td>fecha nacimiento</td>
			<td>ci</td>
			<td>celular</td>
			<td>cargo</td>
		</tr>
		<?php
		$sql="SELECT * FROM 'personales'";
		$result=mysqli_query($conexion.$sql);
			while($mostrar = $result->fetch_array()){ //el fetch_array permite poner nombre de las tablas
				// echo $fila['id_personal']." ". $fila['nombre']." ". $fila['apellidop']." ". $fila['apellidom']." ". $fila['fecha_nacimiento']." ". $fila['ci']." ". $fila['celular']." ". $fila['direccion']." ". $fila['cargo']."<br/>";
				
		?>
		<tr>
			<td><?php echo $mostrar['nombre']?></td>
			<td><?php echo $mostrar['apellidop']?></td>
			<td><?php echo $mostrar['apellidom']?></td>
			<td><?php echo $mostrar['fecha_nacimiento']?></td>
			<td><?php echo $mostrar['ci']?></td>
			<td><?php echo $mostrar['celular']?></td>
			<td><?php echo $mostrar['cargo']?></td>
		</tr>
		<?php
		} 
		?>
	</table>
</body>
</html>
