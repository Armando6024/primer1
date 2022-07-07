<?php
    include('index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../modelo/css.css">
    <title>Clinica Dental Rivera</title>
</head>
<body>
<form action="../controlador/servicios1.php">
    <table>
        <marquee><h3> SERVICIOS</h3></marquee>
        <hr> <!-- linea -->
        <td> <table  type="ok">
        <tr>
            <td>
                <p> SERVICIO :</p>
            </td>
            <td>
                 <input type="text" name="servicio" >
            </td>
        </tr>
        <tr>
            <td>
            <p>  SUBCATEGORIA :</p>
            </td>
            <td>
                 <input type="text" name="subcategoria" >
            </td>
        </tr>
        <tr>
            <td>
            <p> MEDIOS DE PUBLICIDAD :</p>
            </td>
            <td>
                 <input type="text" name="medio_publicidad" >
            </td>
        </tr>
        <tr>
            <td>
            <p> TIEMPO DE PUBLICIDAD :</p>
            </td>
            <td>
                 <input type="text" name="tiempo" >
            </td>
        </tr>
        <tr>
            <td>
            <p> PRECIO :</p>
            </td>
            <td>
                 <input type="numeric" name="precio" >
            </td>
        </tr>
        <tr>
            <td>
            <input type="submit" value="Guardar Datos"><!--boton guardar datos>-->
            </td>
        </tr>


        </table></td>
        <td><table class="tabla2" >
                  <tr>
                       <td class="color1" fantasy>Numero#</td>
                       <td class="color1" fantasy>Servicio</td>
                       <td class="color1" fantasy>SubCategoria</td>
                       <td class="color1" fantasy>Medio Publicidad</td>
                       <td class="color1" fantasy>Tiempo</td>
                       <td class="color1" fantasy>Precio</td>
                     
                    </tr>      
                   <?php
                        $resultado = $mysqli->query($consulta= "SELECT * FROM `servicios`");
                     //   if ($resultado = $mysqli->query($consulta= "SELECT * FROM `personales`")) { // toda la consulta debe ir dentro ya que si esta afuera no es llamada
                            while($fila = $resultado->fetch_array()){ //el fetch_array permite poner nombre de las tablas
                             //   echo $fila['id_personal']." ". $fila['nombre']." ". $fila['apellidop']." ". $fila['apellidom']." ". $fila['fecha_nacimiento']." ". $fila['ci']." ". $fila['celular']." ". $fila['direccion']." ". $fila['cargo']."<br/>";
                       ?>
                    <tr>
                       <td><?php echo $fila['id_servicio'] ?></td>
                       <td><?php echo $fila['servicio'] ?></td>
                       <td><?php echo $fila['subcategoria'] ?></td>
                       <td><?php echo $fila['medio_publicidad'] ?></td>
                       <td><?php echo $fila['tiempo'] ?></td>
                       <td><?php echo $fila['precio'] ?></td>
                    </tr>       
                    <?php
                            }?>
        </table>
</td>
        <td>detalle</td>
    </table>

   
    </form>
</body>
</html>