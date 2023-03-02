<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method = "post" action="">
        <input type="text" name="nazwa" placeholder="nazwa">
        <input type="text" name="ilosc" placeholder="ilosc"> <br>
<input type="submit" value="utworz" onclick='utworz()'>
<input type="submit" value="usun" onclick='usun()'>
<?php

/* function utworz() {
   for ($dlugosc = 1; $dlugosc <= $ilosc; $dlugosc++) {
        mkdir("C:\\xampp\htdocs\\2mgr1\\". $nazwa. $dlugosc, $ilosc);
    }
} */


error_reporting(E_ERROR);
    if (isset($_POST['utworz'])) {
        $nazwa = $_POST['nazwa'];
        $ilosc = $_POST['ilosc'];

        for ($i = 1; $i <= $ilosc; $i++) {
            $folder = $nazwa . $i;
            mkdir($folder);
        }
    }

    if (isset($_POST['usun'])) {
        $nazwa = $_POST['nazwa'];
        $ilosc = $_POST['ilosc'];

        for ($i = 1; $i <= $ilosc; $i++) {
            $folder = $nazwa . $i;
            rmdir($folder);
        }
    }

    ?>

    <form method="post">
        <label>Nazwa folderu:</label>
        <input type="text" name="nazwa"><br>

        <label>Ilość folderów:</label>
        <input type="number" name="ilosc"><br>

        <input type="submit" name="utworz" value="stwórz">
        <input type="submit" name="usun" value="usuń">
    </form>
</body>

</html>