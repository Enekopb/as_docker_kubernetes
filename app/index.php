<?php
require 'dbkon.php';
session_start();
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

if(isset($_POST['inicioSesion'])){

$sql ="SELECT * FROM usuarios WHERE username = '$usuario' and password = '$contra'";
$result = $con->query($sql);
if ($result->num_rows > 0){
     $_SESSION['usuario'] = $usuario;
     header("Location:menu.php"); // Al menu
     exit;
  }else{
    echo "ERROR: No existe ese usuario o la contraseña es incorrecta.";
  }
}

$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<h1 class="encabezado">Inicio</h1>
</body>
<div class="content">
    <form name="loginak" class="inputak" method="POST" action="index.php"> 
        <table>
            <tr>
		<td>&nbsp;</td>	       
	<td><input id="usuario" type="text" name="usuario" placeholder="Usuario Ad: eneko" required></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="contra" type="password" name="contra" placeholder="Pasahitza Ad: JDkF7SH9" required></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="inicioSesion" type="submit" name="inicioSesion" value="Inicio de sesión" /></td>
                <td>&nbsp;</td>
            </tr>
        </table>
    </form>

    <table class="inputak">
        <tr>
            <td>&nbsp;</td>
            <td>¿No te has registrado todavía?</td>
            <td>&nbsp;</td>
            <tr>
                <td>&nbsp;</td>
                <td><input id="registro" type="button" name="registro" value="Registrarse" onclick="location.href='registro.php'" /></td>
                <td>&nbsp;</td>
            </tr>
        </tr>
    </table>   
</div>
</html>
