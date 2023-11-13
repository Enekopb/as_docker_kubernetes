<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menú Principal</title>
</head>
<body>
    <h1>Bienvenido, <?php echo $_SESSION['username']; ?>!</h1>
    <ul>
        <li><a href="ver_rutas_propias.php">Ver mis rutas</a></li>
        <li><a href="ver_rutas_amigos.php">Ver rutas de amigos</a></li>
        <li><a href="anadir_ruta.php">Añadir nueva ruta</a></li>
    </ul>
</body>
</html>
