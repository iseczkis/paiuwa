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
    $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $db_database="klasa2m";
    $connect=mysqli_connect($db_host,$db_user,$db_pass,$db_database);
    if(!$connect)
     die(" połączenie z bazą nie udane");
    else
    {
        print " połączenie udane ";
    }
    ?>
</body>
</html>