<?php
require 'dbkon.php';
session_start();


?>

<!DOCTYPE html>
<html>
<head>
    <title>Menú Principal</title>
    <link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
    <ul>
	<li><a href="anadir_ruta.php">Añadir nueva ruta</a></li>
        <li><a href="ver_rutas_propias.php">Ver mis rutas</a></li>
        <li><a href="http://localhost:3000">Analisis de datos</a></li>
    </ul>
     <table>
            <tr>
                <td>&nbsp;</td>
                <td><input id="salir" type="button" name="salir" value="Salir" onclick="location.href='index.php' " /></td>
                <td>&nbsp;</td>
            </tr>
    </table>
</body>
</html>
