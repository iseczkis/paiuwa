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
    2. Zaproponuj skrypt i go wykonaj. Skrypt ma za zadanie podać ile rady użytkownik był na stronie w ciągu pięciu minut
    3. Napisz skrypt, który jezeli użytkownik wejdzie na stronę trzy razy w ciągu minuty to wyświetli się komunikat "Brak węgla".
-->
<?php
//Zadanie 2
echo "Hello<br>";
setcookie("nazwa",$_COOKIE['nazwa'] + 1,time() + 300);
if(!isSet($_COOKIE['nazwa'])){
    $nazwa=1;}
else
    {$nazwa= intval($_COOKIE['nazwa']);
    $nazwa++;
}
echo "odwiedziałeś stronę $nazwa razy";
echo "<br>";
?>

<?php
//Zadanie 3
echo "Hello<br>";
setcookie("nazwa",$_COOKIE['nazwa'] + 1,time() + 10);
if(($_COOKIE['nazwa'])>2)
{
    echo "Weszłeś na stronę juz 3 razy<br>";
    echo "Hasło: Brak węgla";
}
?>
</body>
</html>