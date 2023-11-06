<?php
    include_once "db_values.php";
    if (!($dbc = mysqli_connect($host, $username, $password, $databaseName))) {
        return;
    }

    $query = "" .
        "SELECT " .
            "* " .
            "FROM " .
                "$customerEntity " .
            "WHERE customer_id = " . $_GET['id'] . ";";
    $resultado = mysqli_query($dbc, $query);

    if (!$resultado)
        return;
    $unaVariableNo=mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create user</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="margin: 20px">
    <form
    action="update_user.php"
    method="post">
        <p>Client Id (Self-Creating and autoincrementing)</p>
        <p><span style="display: inline-block; width: 125px;">Name</span> <input name="name" type="text" maxlength="20" value="<?=$unaVariableNo['name']?>"/> </p>
        <p><span style="display: inline-block; width: 125px;">Surname</span> <input name="surname" type="text" maxlength="20" value="<?=$unaVariableNo['surname']?>"/> </p>
        <p><span style="display: inline-block; width: 125px;">Second surname</span> <input name="second_surname" type="text" maxlength="20" value="<?=$unaVariableNo['second_surname']?>"/> </p>
        <p><span style="display: inline-block; width: 125px;">Tax id</span> <input name="dni" type="text" maxlength="9" value="<?=$unaVariableNo['tax_id']?>"/> </p>
        <p><span style="display: inline-block; width: 125px;">Phone</span> <input name="phone_number" type="text" maxlength="20" value="<?=$unaVariableNo['phone_number']?>"/> </p>
        <p><span style="display: inline-block; width: 125px;">Email</span> <input name="email" type="text" maxlength="40" value="<?=$unaVariableNo['email_address']?>"/> </p>
        <p><span style="display: inline-block; width: 125px;">Address</span> <input name="address" type="text" maxlength="50" value="<?=$unaVariableNo['address']?>"/> </p>
        <p><span style="display: inline-block; width: 125px;">Account number</span> <input name="account_code" type="text" maxlength="5" value="<?=$unaVariableNo['account_code']?>"/> </p>
        <p><span style="display: inline-block; width: 125px;">Income</span> <input name="income" type="number" max="999999" value="<?=$unaVariableNo['income']?>"/> </p>
        <p><input name="customer_id" type="hidden" value="<?=$_GET['id']?>"/> </p>
        <br>
        <button type="submit" style="color-scheme: dark">Update</button>
    </form>
</body>
</html>