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
$customer_id = $_POST['customer_id'];
if (!($dbc = mysqli_connect($host, $username, $password, $databaseName))) {
    return;
}
$query = "UPDATE $customerEntity SET " .
    "name='$name'" ."," .
    "surname='$surname'" ."," .
    "second_surname='$second_surname'" ."," .
    "tax_id='$tax_id'" ."," .
    "phone_number='$phone'" ."," .
    "email_address='$email'" ."," .
    "address='$address'" ."," .
    "account_code='$account_code'" ."," .
    "income=$income" . " " .
    "WHERE " .
    "customer_id = $customer_id;";

echo $query;
$result = mysqli_query($dbc,$query);

mysqli_close($dbc);
if($result!=false)
    header('Location: '."show_clients.php");
