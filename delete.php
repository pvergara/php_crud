<?php
include_once "db_values.php";
if (!($dbc = mysqli_connect($host, $username, $password, $databaseName))) {
    return;
}

$query = "DELETE FROM $customerEntity WHERE customer_id = {$_GET['id']};";
echo $query;
$resultado = mysqli_query($dbc, $query);
if (!$resultado)
    return;
mysqli_close($dbc);
if($resultado!=false)
    header('Location: '."show_clients.php");
?>