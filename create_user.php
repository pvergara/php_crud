<?php
include_once "db_values.php";

    //Validation
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $second_surname = $_POST['second_surname'];
    $tax_id = $_POST['dni'];
    $phone = $_POST['phone_number'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $account_code = $_POST['account_code'];
    $income = $_POST['income'];
    if (!($dbc = mysqli_connect($host, $username, $password, $databaseName))) {
        return;
    }
    $query = "" .
        "INSERT INTO " .
            "$customerEntity " .
        "( " .
            "name" ."," .
            "surname" ."," .
            "second_surname" ."," .
            "tax_id" ."," .
            "phone_number" ."," .
            "email_address" ."," .
            "address" ."," .
            "account_code" ."," .
            "income" . "" .
        ") " .
        "VALUES " .
        "( " .
            "'$name'" ."," .
            "'$surname'" ."," .
            "'$second_surname'" ."," .
            "'$tax_id'" ."," .
            "'$phone'" ."," .
            "'$email'" ."," .
            "'$address'" ."," .
            "'$account_code'" ."," .
            "$income" . "" .
        ")" .
        ";";

    echo $query;
    $result = mysqli_query($dbc,$query);

    mysqli_close($dbc);
    if($result!=false)
        header('Location: '."show_clients.php");