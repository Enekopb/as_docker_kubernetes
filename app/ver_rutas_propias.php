<?php 
require 'dbkon.php'; 
session_start(); 
$usuario = $_SESSION['usuario']; 
?>  

<!DOCTYPE html>
<html>
<head>
    <title>Rutas propias</title>
    <link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>
    <h2>Tus rutas: </h2>
    <form name="erabAukerak" class="inputak" action="erabileremu.php" method="POST">
        <tr>
                <td>&nbsp;</td>
                <td><input id="vuelta" type="button" name="vuelta" value="vuelta" title="Volver al menu" onclick="location.href='menu.php'"/></td>
        </tr>
    </form>
<?php
        $db = new mysqli("db", "admin", "test123#", "database");
        $sql = "SELECT nombre_ruta, kilometros, duracion, desnivel FROM ruta WHERE usuario='$usuario'";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $resultSet = $stmt->get_result();
        $datos = $resultSet->fetch_all();
        foreach($datos as $dato) {
?>

 <div class="php">
        <table id = "datosTabla" class = "table-striped table-bordered" style = "width:100%">
            <thead class = "text-center">   
                        <th>Nombre de la ruta</th>
                        <th>Distancia recorrida</th>
                        <th>Duracion</th>
                        <th>Desnivel</th>
                </thead>

            <tbody>
                <tr>
                    <td><?php echo $datos[0]?></td>
                    <td><?php echo $datos[1]?></td>
                    <td><?php echo $datos[2]?></td>
                    <td><?php echo $datos[3]?></td>
                </tr>

                <?php } ?>

            </tbody>
        </table>
    </div>

</body>
</html>
