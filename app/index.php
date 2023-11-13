<?php
require 'db_conn.php';
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

$sql ="SELECT * FROM usuarios WHERE 'usuario' = '$usuario' and 'contra' = '$contra'";
$query = mysqli_query($con,$sql);
$nr = mysqli_num_rows($query); 
$row = mysqli_fetch_array($query);

if(isset($_POST['inicioSesion'])){
  if (($nr == 1)){
     $_SESSION['usuario'] = $usuario;
     header("Location: http://localhost:8080/menu.php"); // Al menu
     exit;
  }else{
    echo "ERROR: No existe ese usuario o la contraseña es incorrecta.";
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mendi - Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<div class="content">
<body background="fondo.jpg">
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
            <td>&nbsp;</td>
            <td>&nbsp;</td>
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
</body>    
</div>
</html>
