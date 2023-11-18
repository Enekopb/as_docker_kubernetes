<?php 
require 'dbkon.php'; 
session_start(); 
$usuario = $_SESSION['usuario']; 
?>  

<!DOCTYPE html>
<html>
<head>
    <title>Rutas propias</title>
    <link rel="stylesheet" type="text/css" href="styles3.css">
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
    <h2>Tus rutas: </h2>
<div class="php">
	<table id = "datosTabla" class = "table-striped table-bordered" style = "width:90%">	
		<thead class = "text-center">
                        <th>Nombre de la ruta</th>
                        <th>Distancia recorrida</th>
                        <th>Duracion</th>
                        <th>Desnivel</th>
                </thead>

<?php
	$db = new mysqli("db", "admin", "test123#", "database");
        $sql = "SELECT * FROM rutas WHERE usuario = '$usuario'";
	$stmt = $db->prepare($sql);
	if ($stmt === false) {
    		die("Error al preparar la consulta: " . $ddbb->error);
	}
        $stmt->execute();
        $resultSet = $stmt->get_result();
        $datos = $resultSet->fetch_all();
        foreach($datos as $dato) {
?>
           <tbody>
                <tr>
                    <td><?php echo $dato[2]?></td>
                    <td><?php echo $dato[3]?></td>
                    <td><?php echo $dato[4]?></td>
                    <td><?php echo $dato[5]?></td>
                </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>
    <form name="menu" class="inputak" action="menu.php" method="POST">
        <tr>
                <td>&nbsp;</td>
                <td><input id="vuelta" type="button" name="vuelta" value="vuelta" title="Volver al menu" onclick="location.href='menu.php'"/></td>
        </tr>
    </form>
</body>
</html>
