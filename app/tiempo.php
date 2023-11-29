<?php
$file = fopen("datos", "r");

if ($file) {
    $wordsList = [];

    while (($line = fgets($file)) !== false) {
        $words = explode(" ", $line);
        foreach ($words as $word) {
            // Elimina los espacios en blanco y guarda la palabra
            $cleanedWord = trim($word);
            if (!empty($cleanedWord)) {
                $wordsList[] = $cleanedWord;
            }
        }
    }
    fclose($file);
} else {
    echo "No se pudo abrir el archivo.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rutas propias</title>
    <link rel="stylesheet" type="text/css" href="styles3.css">
</head>
<body>
<div class="php">
        <table id = "datosTabla" class = "table-striped table-bordered" style = "width:90%">
                <thead class = "text-center">
                        <th>Ciudad</th>
                        <th>Tiempo</th>
                        <th>Temperatura</th>
                        <th>Humedad</th>
                </thead>
           <tbody>
                <tr>
<?php foreach($wordsList as $word) { ?>
                <td><?php echo $word?> </td>
<?php } ?>
                </tr>
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
