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
    <?php 
    /*
    za pomoca formulaza - własny projekt zademonstruj działąnia operatorów bitowych w jezyki php
    */
    
    ?>
    <form action="kod.php" method="post">
        <br><h2>Operatory Bitowe</h2>
        <input type="text" name="liczba1" placeholder="podaj a">
        <select name="sel">
            <option value="1">Iloczyn bitowy</option>
            <option value="2">Suma bitowa</option>
            <option value="3">Negacja bitowa</option>
            <option value="4">Bitowa różnica symetryczna</option>
            <option value="5">Przesunięcie bitowe w prawo</option>
            <option value="6">Przesunięcie bitowe w lewo</option>
        </select>
        <input type="text" name="liczba2" placeholder="podaj b">
        <input type="submit" value="oblicz">
    </form>
</body>
</html>