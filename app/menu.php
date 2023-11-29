<?php
require 'dbkon.php';
session_start();
$grafana = "//".$_SERVER['SERVER_NAME'].":3000";
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
	<li><a onclick="location.href='tiempo.php'">Tiempo</a></li>
	<li><a onclick="location.href='anadir_ruta.php'">Añadir nueva ruta</a></li>
        <li><a onclick="location.href='ver_rutas_propias.php'">Ver mis rutas</a></li>
        <li><a href=http:<?php echo $grafana; ?>>Analisis de datos</a></li>
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
