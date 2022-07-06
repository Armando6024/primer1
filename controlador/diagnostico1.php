<?php
     require('../modelo/uniones.php');
 //$mysqli = new mysqli("localhost", "root", "", "diseño");
if($_POST){
    $nombre_clinica1=$_POST['nombre_clinica'];
    $ventaja1_1=$_POST['ventaja1'];
    $ventaja2_2=$_POST['ventaja2'];
    $desventaja1_1=$_POST['desventaja1'];
    $desventaja2_2=$_POST['desventaja2'];
    //$fecha=$_POST['txtfecha'];
   // $diagnosticos=(isset($_POST['diagnosticos']))?$_POST['diagnosticos']:"";
   // echo "SUS DATOS SON ".$nombre_clinica1." ".$ventaja1_1." ".$ventaja2_2." ".$desventaja1_1."".$desventaja2_2;

$sql = "INSERT INTO `diagnosticos` (`id_diagnostico`,`nombre_clinica`,`ventaja1`,`ventaja2`,`desventaja1`,`desventaja2`) VALUES (null,'$nombre_clinica1','$ventaja1_1','$ventaja2_2','$desventaja1_1','$desventaja2_2')";
    //dato agregado a la base de datos 

//consulta y hace el proceso de pasar los datos
    if (mysqli_query($mysqli, $sql)) {
      $message = "Datos Correctos";
      echo "<script type='text/javascript'>alert('$message');</script>";
    
    } else {
      $message = "No se Cargaron los Datos";
      echo "<script type='text/javascript'>alert('$message');</script>". mysqli_error($mysqli);
}
mysqli_close($mysqli);   
}


?>