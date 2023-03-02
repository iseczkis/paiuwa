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
        if(@$_COOKIE['imie']>3) {
            echo "brak węgla";
        }

        else if(isset($_COOKIE['imie'])) {
            echo "jestes na stronie ".$_COOKIE['imie']." raz";
            setcookie("imie",$_COOKIE['imie']+1);
        }

        else {
            echo "jestes na stronie 1 raz";
            setcookie("imie",2,time()+60);
        }
        
    ?>
</body>
</html>
<!--zaproponuj skrypt i go wykonaj. skrypt ma za zadanie podac ile razy uzytkownik byl na stronie w ciagu 5 min
napisz skrypt który, jezeli uzytkownik wejdzie na strone 3 razy w ciagu minuty to wyswietli sie komunikat brak wegla