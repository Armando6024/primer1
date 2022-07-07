<?php
     require('../modelo/uniones.php');
     
 //$mysqli = new mysqli("localhost", "root", "", "diseño");
if($_POST){
    $nombre=$_POST['nombre'];
    $apellido1=$_POST['apellido1'];
    $apellido2=$_POST['apellido2'];
    $fecha=$_POST['fecha'];
    $ci=$_POST['ci'];
    $celular=$_POST['celular'];
    $direccion=$_POST['direccion'];
    $cargo=$_POST['cargo'];
    //$fecha=$_POST['txtfecha'];
   // $diagnosticos=(isset($_POST['diagnosticos']))?$_POST['diagnosticos']:"";
   // echo "SUS DATOS SON ".$nombre_clinica1." ".$ventaja1_1." ".$ventaja2_2." ".$desventaja1_1."".$desventaja2_2;

$sql = "INSERT INTO `personales` (`id_personal`,`nombre`,`apellidop`,`apellidom`,`fecha_nacimiento`,`ci`,`celular`,`direccion`,`cargo`) VALUES (null,'$nombre','$apellido1','$apellido2','$fecha','$ci','$celular','$direccion','$cargo')";
    //dato agregado a la base de datos 

//consulta y hace el proceso de pasar los datos
//mysqli_query($mysqli, $sql
    if (mysqli_query($mysqli, $sql)) {
      
      $message = "Datos Correctos";
      echo "<script type='text/javascript'>alert('$message');</script>";
      require('../view/personal.php');
    } else {
      $message = "No se Cargaron los Datos";
      echo "<script type='text/javascript'>alert('$message');</script>". mysqli_error($mysqli);
}
mysqli_close($mysqli);   
}


?>