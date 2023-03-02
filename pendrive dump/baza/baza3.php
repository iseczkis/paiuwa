<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        utwórz formularz z odpowiednia iloscią pól do połączenia z bazą danych 
    -->
    <form action="" method="post">
        <input type="text" name="host" placeholder="host"><br>
        <input type="text" name="user" placeholder="user"><br>
        <input type="text" name="pass" placeholder="password"><br>
        <input type="text" name="database" placeholder="database"><br>
        <input type="text" name="utworz_baza" placeholder="nowa baza danych"><br>
        <input type="submit" value="połączenie">
    </form>
    <?php
    $db_host=$_POST['host'];
    $db_user=$_POST['user'];
    $db_pass=$_POST['pass'];
    $db_database=$_POST['database'];
    $connect=@mysqli_connect($db_host,$db_user,$db_pass);
    if(!$connect)
     die(" połączenie z bazą nie udane");
    else
    {
        print " połączenie udane ";
    }
    $nowa_baza=$_POST['utworz_baza'];
    $utworz_nazwa_baza="Create Database $nowa_baza";
    mysqli_query($connect,$utworz_nazwa_baza);

    /*$usun_baza=$_POST['usun_baza'];
    $usun_nazwa_baza="Drop Database $nowa_baza";
    mysqli_query($connect,$usun_nazwa_baza);*/
    ?>
</body>
</html>