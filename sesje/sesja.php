<?php 
    //rozpoczęcie sesji
    session_start();
    // nazwa zmiennej --> wartość
    $_SESSION['zmienna_sesji'] = "abdc";
    $_SESSION['zmienna'] = 123;
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        witamy na stronie. Została rozpoczęta sesje.<br>
        Identyfikaorem sesji jest:
        <?php 
            // session_id() --> pokazuje id sesji.
            echo session_id();
        ?>
        <br>
        Została ustawiona zmienna o nazwie: zmianna_sesji <br>
        Wartości zmiennej zmienna_sesji jest:
        <?php 
            echo $_SESSION['zmienna_sesji'];
            echo "<br>";
            echo $_SESSION['zmienna'];
            echo "<br>";
        ?> 
    </div>
</body>
</html>