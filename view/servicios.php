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
    <table  type="ok">
        <h3> SERVICIOS</h3>
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
        </table>
    </form>
</body>
</html>