<?php
require 'dbkon.php';
session_start();

$ruta = $_POST['ruta'];
$km = $_POST['kilometros'];
$usuario= $_SESSION['usuario'];
$desnivel=$_POST['desnivel'];
$duracion=$_POST['duracion'];

if(isset($_POST['enviar'])){

	$sql ="INSERT INTO rutas (usuario, nombre_ruta, kilometros,duracion,desnivel) VALUES ('$usuario','$ruta','$km', '$duracion', '$desnivel')";
		if ($con->query($sql) === TRUE) {
	        	header("Location:menu.php"); // Al menu
			echo "Datos insertados correctamente";
    		} else {
        		echo "Error al insertar datos: " . $con->error;
    		}	
        }

$con->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rutas propias</title>
    <link rel="stylesheet" type="text/css" href="styles2.css">
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?>!</h1>
    <form name="rutanueva" id="rutanueva" class="rutanueva" action="anadir_ruta.php" method="POST" >
	  <table>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="ruta" type="text" name="ruta" placeholder="Nombre ruta:" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="kilometros" type="text" name="kilometros" placeholder="kilometros" required/></td>
                <td>&nbsp;</td>
	    </tr>
	    <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="duracion" type="text" name="duracion" placeholder="duracion" required/></td>
                <td>&nbsp;</td>
            </tr>
	    <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="desnivel" type="text" name="desnivel" placeholder="desnivel" required/></td>
                <td>&nbsp;</td>
            </tr>
	    <tr>
                <td>&nbsp;</td>
                <td><input id ="enviar" type="submit" name="enviar" value="enviar" ></td>                
                <td>&nbsp;</td>
            </tr>
	  </table>
	</form>
</body>
</html>
