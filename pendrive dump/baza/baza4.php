<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  //(MySQLi Object-Oriented)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $connect = new mysqli($servername, $username, $password);
    if ($connect->connect_error){
        die("connection failed: ".$connect->connect_error);
    }
    else echo "connected successfully";
    $connect->close();
    ?>
</body>
</html>