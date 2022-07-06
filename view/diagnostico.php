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
<form action="../controlador/diagnostico1.php" method="post">
<table  type="ok">
        <h3> DIAGNOSTICO</h3>
        <tr>
            <td>
                <p> NOMBRE DE LA CLINICA :</p>
            </td>
            <td>
                <input type="text" name="nombre_clinica" placeholder="nombre de la clinica" onkeyup="this.value=this.value.toUpperCase()">
            </td>
        </tr>
        <tr>  
            <td>
                <p> VENTAJA :</p>
            </td>
            <td>
               <p>
                 <input type="text" name="ventaja1" placeholder="nombre de la ventaja" onkeyup="this.value=this.value.toUpperCase()">
                </p>
                <textarea  name="ventaja2" rows="5" cols="40" placeholder="Ingresa detalles" onkeyup="this.value=this.value.toUpperCase()"></textarea >
                
            </td>
        </tr>
        <tr>
            <td>
            <p>  DESVENTAJA :</p>
            </td>
            <td>
                  <p>
                <input type="text" name="desventaja1" placeholder="nombre de la desventaja" onkeyup="this.value=this.value.toUpperCase()" >
               </p>
                <textarea name="desventaja2" rows="5" cols="40" placeholder="Ingresa detalles" onkeyup="this.value=this.value.toUpperCase()"></textarea>
                
            </td>
        </tr>
        </table>
        <input type="button" value="Aceptar1" onclick="validar();">
        <input type="submit" value="Aceptar2">
        </form>
</body>
</html>