<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    define('user', 'root');
    define('user_password', '');
    define('host', 'localhost');
    define('database_name', 'klasa2m');
    mysqli_connect(host,user,user_password);
    $connect=mysqli_connect(host,user,user_password);
    if (!$connect)
        die(" połączenie z bazą nie udane");
    else{
        print " połączenie udane ";
    }
    ?>


</body>
</html>