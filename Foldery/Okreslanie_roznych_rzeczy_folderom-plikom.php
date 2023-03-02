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
    /*
    //Okreslanie pliku na podstawie ścieżki
        $path = "C:/xampp/htdocs/PHP/2mgr1/plik.txt";
        printf("Nazwa pliku: %s <br>",basename($path));
        printf("Nazwa pliku bez rozszerzenia: %s <br>", basename($path,".txt"))
    */
    //Określanie czasu ostatniej modyfikacji pliku
        $file = "C:/xampp/htdocs/2mgr1/Okreslanie_roznych_rzeczy_folderom-plikom.php";
        echo "Czas ostatniej modyfikacji: ".date("d.m.y g:i:sa", filemtime($file));
    
    //Zmiana nazwy pliku
        for($i=1;$i<=5;$i++)
        {
            fopen("C:/xampp/htdocs/2mgr1/plik"."$i","w");
            echo "Plik".$i;
        }

        for($i=1;$i<=5;$i++)
        {
            rename("C:/xampp/htdocs/2mgr1/plik"."$i","C:/xampp/htdocs/2mgr1/plik"."$i"+10);
            echo "Plik".$i+10;
        }
    
    //Kartkowka 24.02.23
        //utworzyc foldery i pliki w danej lokalizacji
        //wyswietlanie struktury dowolnego folderu (wypisac ich nazwy, rozmiary)
        //okreslanie czasu ostatniej modyfikacji plików (czas pobierany jest z serwera)
    ?>
</body>
</html>