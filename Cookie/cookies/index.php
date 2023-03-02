<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(!isset($_COOKIE['imie']) && !isset($_POST['imie'])) {
            include 'head.html';
            include 'main.html';
            include 'footer.html';
        }
        else if(isset($_POST['imie'])) {
            setcookie("imie",$_POST['imie'],time()+60);
            include 'head.html';
            echo("<p>Dzieki za podanie danych</p>");
            include 'footer.html';
        }
        else {
            include 'head.html';
            echo("<p>Witamy ponownie {$_COOKIE['imie']}.</p>");
            include 'footer.html';
        }
    ?>
</body>
</html>