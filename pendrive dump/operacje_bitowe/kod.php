<?php 
    $a=(int)$_POST['liczba1'];
    $b=(int)$_POST['liczba2'];
    $c=$_POST['sel'];
    if(!empty($a) && !empty($b))
    {
        switch ($c)
        {
            case 1:     
                $wynik=$a & $b;
                echo " iloczyn bitowy podanych liczb: ".$a. " i ".$b . " wynosi:  ". $wynik;
            break;
            case 2:
                $wynik=$a | $b;
                echo " suma bitowa podanych liczb: ".$a. " i ".$b . " wynosi:  ". $wynik;
            break;
            case 3:
                $wynik=~$a;
                echo " negacja bitowa liczby: ".$a. " wynosi:  ". $wynik;
            break;
            case 4:
                $wynik=$a ^ $b;
                echo " bitowa różnica symetryczna podanych liczb: ".$a. " i ".$b . " wynosi:  ". $wynik;
            break;
            case 5:
                $wynik=$a >> $b;
                echo " przesunięcie bitowe w prawo podanych liczb: ".$a. " i ".$b . " wynosi:  ". $wynik;
            break;
            case 6:
                $wynik=$a << $b;
                echo " przesunięcie bitowe w lewo podanych liczb: ".$a. " i ".$b . " wynosi:  ". $wynik;
            break;
        }
    }
    else{
        echo " podałeś 0";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <form action="indeks.php">
        <input type="submit" value="powrót">
    </form>
</body>
</html>