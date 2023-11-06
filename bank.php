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
    $dbc = mysqli_connect($host, $username, $password, $databaseName);
    if (!$dbc){
        exit();
    }
    $query = mysqli_query($dbc, "SELECT * FROM $customerEntity");
    if(!$query){
        exit();
    }
?>
    <table>
        <thead>
            <tr>
                <th>Customer</th>
                <th>Tax id</th>
                <th>Phone number</th>
                <th>Email address</th>
                <th>Address</th>
                <th>Account code</th>
                <th>Income</th>
            </tr>
        </thead>
        <tbody>
        <?php
            while ($fila = mysqli_fetch_array($query)){
        ?>
                <tr>
                    <td><?=$fila["name"]?>  <?=$fila["surname"]?>  <?=$fila["second_surname"]?>  </td>
                    <td><?=$fila["tax_id"]?></td>
                    <td><?=$fila["phone_number"]?></td>
                    <td><?=$fila["email_address"]?></td>
                    <td><?=$fila["address"]?></td>
                    <td><?=$fila["account_code"]?></td>
                    <td><?=$fila["income"]?></td>
                </tr>
        <?php
        }
        ?>
        </tbody>
    </table>


</body>
</html>
