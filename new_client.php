<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if($dbc = mysqli_connect('localhost', 'bank_user', 'bank_user', 'banco')) {
        $query = "SELECT * FROM clientes";
        $resultado = mysqli_query($dbc, $query);
    
    
    ?>
    <table>
            <thead>
            <tr>
                <th>Client Id <br>
                <textarea name="" id="1" cols="10" rows="2"></textarea>
                </th>
                <th>Name <br>
                <textarea name="" id="2" cols="10" rows="2"></textarea>
                </th>                
                <th>Surname <br>
                <textarea name="" id="" cols="10" rows="2"></textarea></th>
                <th>2nd Surname <br>
                <textarea name="" id="" cols="10" rows="2"></textarea></th>
                <th>DNI <br>
                <textarea name="" id="" cols="8" rows="2"></textarea></th>
                <th>Phone number <br>
                <textarea name="" id="" cols="15" rows="2"></textarea></th>
                <th>Email <br>
                <textarea name="" id="" cols="15" rows="2"></textarea></th>
                <th>Address <br>
                <textarea name="" id="" cols="20" rows="2"></textarea></th>
                <th>Acc. code <br>
                <textarea name="" id="" cols="6" rows="2"></textarea></th>
                <th>Income <br>
                <textarea name="" id="" cols="10" rows="2"></textarea></th>
            </tr>
            
            </thead>
            <tbody>
            

            
            </tbody>
            
        </table>
        <br>
        <button type="button" action="">Add client</button> 
               
        <?php
    
}
?>

</body>
</html>