<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Formulario</title>
</head>
<body>
<?php
$mustShowError = false;

$tratamiento = $_POST['tratamiento'];
if (!empty($_POST['nombre'])) {
    $nombre = $_POST['nombre'];
} else {
    $nombre = '';
    $mustShowError = True;
}

if (isset($_POST['respuesta'])) {
    $respuesta = $_POST['respuesta'];
} else {
    $respuesta = '';
    $mustShowError = True;
}

if (!(empty($_POST['comentarios']))) {
    $comentarios = $_POST['comentarios'];
} else {
    $comentarios = '';
    $mustShowError = True;
}

if ($mustShowError == True) {
?>
    <p>Es necesario rellenar todos los datos del formulario</p>
    <a href='form.html'>Volver al formulario</a>
<?php
} else {
?>
<p>Gracias, <?=$tratamiento?> <?=$nombre?> por sus comentarios</p>
<p>Su valoración $respuesta y sus comentarios $comentarios serán tenidos en cuenta</p>
<?php
}
?>
</body>
</html>