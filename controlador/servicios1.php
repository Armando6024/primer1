<?php
     require('../modelo/uniones.php');
if($_POST){
    $servicio=$_POST['servicio'];
    $subcategoria=$_POST['subcategoria'];
    $medio_publicidad=$_POST['medio_publicidad'];
    $tiempo=$_POST['tiempo'];
    $precio=$_POST['precio'];

$sql = "INSERT INTO `servicios` (`id_servicio`,`servicio`,`subcategoria`,`medio_publicidad`,`tiempo`,`precio`) VALUES (null,'$servicio','$subcategoria','$medio_publicidad','$tiempo','$precio')";

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

   
