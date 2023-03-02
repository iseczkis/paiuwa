<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    //dirname - wypisuje ścieżkę, w której znajduje się dany plik
        $file = "C:/xampp/htdocs/2mgr1/Funckje_dzialania_na_folderach.php";
        printf("Ścieżka katalogu: %s",dirname($file));
    
    //Sposob wypisu informacji o danym pliku
        $pathinfo = pathinfo("C:/xampp/htdocs/2mgr1/Funckje_dzialania_na_folderach.php");
        printf("Ścieżka katalogów: %s <br>",$pathinfo['dirname']);
        printf("Nazwa bazowa: %s <br>",$pathinfo['basename']);
        printf("Rozszerzenie: %s <br>",$pathinfo['extension']);
        printf("Nazwa pliku: %s <br>",$pathinfo['filename']);

    //Określanie pliku bezwzględnego
    $path = "../../2mgr1/Funckje_dzialania_na_folderach.php";
    $absolutePath = realpath($path);
    printf("Pełna ścieżka do pliku:",$absolutePath);
    
    //określanie wielkości danego katalogu
    */
    function directorySize($directory){
        $directorySize=0;
        //Otworzenie i odczytanie zawartości katalogu
        if($dh = @opendir($directory)){
            //Przetworzenie każdego elementu katalogu
            while ($filename = readdir($dh)){
                //Pominięcie elementów reprezentujących pewne katalogi
                if($filename != "." && $filename != "..")
                {
                    //Plik, określenie wielkości i dodanie do wielkości sumarycznej
                    if(is_file($directory."/".$filename))
                        $directorySize += filesize($directory."/".$filename);
                    //Nowy katalog - przetworzenie rekurencyjne
                    if(is_dir($directory."/".$filename))
                        $directorySize += directorySize($directory."/".$filename);
                }
            }
            
        }
        @closedir($dh);
        return $directorySize;
        
    }
    $directory = "C:/xampp/htdocs/wordpress";
        $totalSize = round((directorySize($directory)/1048576),2);
        printf("Katalog %s: %f MB",$directory,$totalSize);
    ?>
</body>
</html>