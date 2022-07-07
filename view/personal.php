<?php
 require('../modelo/uniones.php');
include('index.php');
//<link rel="stylesheet" href="../modelo/css.css">
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <form action="personal.php"  method="post">
<table class="tabla1">
        <h3><marquee> REGISTRO DE PERSONAL </marquee></h3>
        <td rowspan="9">
            <table class="tabla2" >
                  <tr>
                       <td class="color1" fantasy>NUMERO</td>
                       <td class="color1" fantasy>NOMBRE</td>
                       <td class="color1" fantasy> APELLIDO PATERNO</td>
                       <td class="color1" fantasy> APELLIDO MATERNO</td>
                       <td class="color1" fantasy> FECHA NACIMIENTO</td>
                       <td class="color1" fantasy>NUMERO DE CARNET</td>
                       <td class="color1" fantasy>CELULAR</td>
                       <td class="color1" fantasy>DIRECCION</td>
                       <td class="color1" fantasy>CARGO</td>
                    </tr>      
                   <?php
                        $resultado = $mysqli->query($consulta= "SELECT * FROM `personales`");
                     //   if ($resultado = $mysqli->query($consulta= "SELECT * FROM `personales`")) { // toda la consulta debe ir dentro ya que si esta afuera no es llamada
                            while($fila = $resultado->fetch_array()){ //el fetch_array permite poner nombre de las tablas
                             //   echo $fila['id_personal']." ". $fila['nombre']." ". $fila['apellidop']." ". $fila['apellidom']." ". $fila['fecha_nacimiento']." ". $fila['ci']." ". $fila['celular']." ". $fila['direccion']." ". $fila['cargo']."<br/>";
                       ?>
                    <tr>
                       <td><?php echo $fila['id_personal'] ?></td>
                       <td><?php echo $fila['nombre'] ?></td>
                       <td><?php echo $fila['apellidop'] ?></td>
                       <td><?php echo $fila['apellidom'] ?></td>
                       <td><?php echo $fila['fecha_nacimiento'] ?></td>
                       <td><?php echo $fila['ci'] ?></td>
                       <td><?php echo $fila['celular']?></td>
                       <td><?php echo $fila['direccion'] ?></td>
                       <td><?php echo $fila['cargo'] ?></td>
                    </tr>       
                    <?php
                            }?>
        </table>
            </td>
        <tr >
            <td>
                Nombre :
            </td>
            <td>
                 <input type="text" name="nombre" onkeyup="this.value=this.value.toUpperCase()" >
            </td>
        </tr>
        <tr>
            <td>
            Apellido Paterno :
            </td>
            <td>
            <input type="text" name="apellido1" onkeyup="this.value=this.value.toUpperCase()" >
            </td>
        </tr>
        <tr>
            <td>
            Apellido Materno:
            </td>
            <td>
                <input type="text" name="apellido2"  onkeyup="this.value=this.value.toUpperCase()">
            </td>
        </tr>
        <tr>
            <td>
              Fecha Nacimiento:
            </td>
            <td>
                 <input type="date" name="fecha" >
            </td>
        </tr>
        <tr>
            <td>
         Ci:
            </td>
            <td>
                 <input type="text" name="ci" >
            </td>
        </tr>
        <tr>
            <td>
            Celular:
            </td>
            <td>
                 <input type="numeric" name="celular" onkeyup="this.value=this.value.toUpperCase()" >
            </td>
        </tr>
        <tr>
            <td>
            Direccion :
            </td>
            <td>
                 <input type="text" name="direccion" onkeyup="this.value=this.value.toUpperCase()" >
            </td>
        </tr>
        <tr>
            <td>
            Cargo:
            </td>
            <td>
                 <input type="text" name="cargo" onkeyup="this.value=this.value.toUpperCase()" >
            </td>
        </tr>
        
        <tr>
             <td class="1">
            </td >           

            <td colspan="2">
            <input type="submit" value="Guardar Datos"><!--boton guardar datos>-->
            </td>
        </tr>                
        </table>
        </form>
</body>
</html>