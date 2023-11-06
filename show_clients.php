<?php
include_once "db_values.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
if (!($dbc = mysqli_connect($host, $username, $password, $databaseName))) {
    return;
}
$query = "SELECT * FROM $customerEntity";
$resultado = mysqli_query($dbc, $query);
if (!$resultado) {
    return;
} ?>
<table>
    <thead>
    <tr>
        <th>Name &emsp;</th>
        <th>Surname &emsp;</th>
        <th>2nd surname &emsp;</th>
        <th>DNI &emsp;</th>
        <th>&emsp;Phone number &emsp;</th>
        <th>Email &emsp;</th>
        <th>&emsp;Address &emsp;</th>
        <th>&emsp;Acc code &emsp;</th>
        <th>Income</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($fila = mysqli_fetch_array($resultado)) {
        ?>
        <tr>
            <td><?= $fila['name'] ?></td>
            <td><?= $fila['surname'] ?></td>
            <td><?= $fila['second_surname'] ?></td>
            <td><?= $fila['tax_id'] ?></td>
            <td>&emsp;<?= $fila['phone_number'] ?></td>
            <td><?= $fila['email_address'] ?></td>
            <td>&emsp;<?= $fila['address'] ?></td>
            <td>&emsp;<?= $fila['account_code'] ?></td>
            <td><?= $fila['income'] ?></td>
            <td>
                    <a href="update.php?id=<?= $fila['customer_id']?>">Update</a>
                <a href="delete.php?id=<?= $fila['customer_id']?>">Delete</a>
                <a href="increase.php?id=<?= $fila['customer_id']?>">Increase</a>
                <a href="withdraw.php?id=<?= $fila['customer_id']?>">Withdraw</a>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

<a href="create.html">Create</a>
<?php
?>
</body>
</html>
