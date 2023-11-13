<?php
require 'db_conn.php';
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];

$sql ="SELECT * FROM `Erabiltzaileak` WHERE `erabId` = '$erabIz'";
$query = mysqli_query($con,$sql);
$nr = mysqli_num_rows($query); // nr aldagaian 1 erabiltzailea aurkitu bada 0 erabiltzailea ez bada aurkitu
$row = mysqli_fetch_array($query);

if(isset($_POST['inicioSesion'])){
  if (($nr == 1)){
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
    <form name="loginak" class="inputak" method="POST" action="login2.php"> <!-- Se envia al ".php" la info -->
        <table>
            <tr>
                <td>&nbsp;</td>
                <td><input id="erabIzena" type="text" name="erabIzena" placeholder="Erabiltzailea Ad: eneko5" required></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="pasahitza" type="password" name="pasahitza" placeholder="Pasahitza Ad: JDkF7SH9" required></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input id="inicioSesion" type="submit" name="inicioSesion" value="Saioa hasi" /></td>
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
            <td>Ez zara erregistratu?</td>
            <td>&nbsp;</td>
            <tr>
                <td>&nbsp;</td>
                <td><input id="erregistroBuelta" type="button" name="erregistroBuelta" value="Registrarse" onclick="location.href='registro.php'" /></td>
                <td>&nbsp;</td>
            </tr>
        </tr>
    </table>
</body>    
</div>
</html>
