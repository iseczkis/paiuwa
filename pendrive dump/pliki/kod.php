<?php 
    $filename = "jakisplik.txt";//nazwa pliku do odczytania 
    if(is_file($filename))//czy plik istnieje?
    {
        $file = fopen($filename, "r");//otwarcie pliku w trybie do odczytu 
        $contents = fread($file, filesize($filename));//pobranie zawartości pliku do zmiennej
        echo $contents;
        fclose($file);//zamknięcie pliku
    }
    echo "<br><hr>";
?>
<?php 
    $plik=fopen("jakisplik.txt", "r");
    $znaki=fread($plik, 31);//odczytuje pierwsze 31 pierwszch znaków
    echo $znaki;
    fclose($plik);
    echo "<br><hr>";
?>
<?php 
    $plik=fopen("jakisplik.txt", "r");
    $znaki=fgets($plik);
    echo $znaki;
    fclose($plik);
    echo "<br><hr>";
?>
<?php 
    $plik=fopen("jakisplik.txt", "r");
    $i=0;
    while(!feof($plik)) //dopóki nie natrafisz na znak końca pliku
    {
        $liczba[$i]=fgets($plik);
        echo $liczba[$i]. "<br>";
        $i++;
    }
    fclose($plik);
    echo "<br><hr>";
?>
<br>
<a href="plik1.php"><button>powrót</button></a>