<?php
	require 'dbkon.php'; 
	session_start();

	$nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $contra = $_POST['password'];

	if(isset($_POST['registrarse'])){
		
		$sql ="INSERT INTO usuarios (username, email, password) VALUES ('$nombre','$email','$contra')";
		if ($con->query($sql) === TRUE) {
			$_SESSION['usuario'] = $nombre;
	        	header("Location:menu.php"); // Al menu
			echo "Datos insertados correctamente";
    		} else {
        		echo "Error al insertar datos: " . $con->error;
    		}	
        }

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro</title>
</head>
<link rel="stylesheet" type="text/css" href="styles.css">

<div class="content">
	<form name="registro" id="registro" class="registro" action="registro.php" method="POST" >
	  <table>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="nombre" type="text" name="nombre" placeholder="Nombre" required/></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input class="form-control" id="email" type="text" name="email" placeholder="email" title="ADB: eperez89@gmail.com" required/></td>
                <td>&nbsp;</td>
	    </tr>
	    <tr>
                <td>&nbsp;</td>
                <td><input id="password" type="password" name="password" placeholder="Contraseña" required></td>
                <td>&nbsp;</td>
	    </tr>
	    <tr>
                <td>&nbsp;</td>
                <td><input id ="registrarse" type="submit" name="registrarse" value="registrarse" ></td>                
                <td>&nbsp;</td>
            </tr>
	  </table>
	</form>
	
</div>
</body>
</html>
