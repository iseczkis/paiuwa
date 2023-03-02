<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
       <h3>Łukasz Płomiński</h3>
        <h2>Program nr1</h2>  
    </header>
    <fieldset>
            <legend>Ćwiczenie - kalkulator</legend>
        <form method="POST" action="plik.php">
            <input type="text" name='liczba1'> podaj a<br>
            <select name="sel">
                <option value="1">+</option>
                <option value="2">-</option>
                <option value="3">*</option>
                <option value="4">/</option>
            </select><br>
            <input type="text" name='liczba2'> podaj b<br><br>
            <input type="submit" value="Oblicz"><br><br>
        </form>
    </fieldset>
</body>
</html>