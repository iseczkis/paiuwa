<?php 
    $kolory = array(
        "kolor1" => 'czerwony',
        "kolor2" => 'zielony',
        "kolor3" => 'niebieski'
    );

    //echo $kolory['kolor1']."<br>";
    foreach($kolory as $x => $y){
        echo "$x = "."$y "."<br>";
    }
    //----------------------------------------------------
    echo "<br>";
    //print_r() - funkcja wysietla tablice w sposob jasny i przejrzysty dla programisty, pokazujac nazwy indeksow:
    print_r($kolory);
    //wynik kodu: Array ([kolor1] => czerwony [kolor2] => zielony [kolor3] => niebieski)

    //----------------------------------------------------
    echo "<br>";
    //array_push() - Funkcja dodaje element/y na koncu tablicy

    $array = array();
    for ($i = 1; $i <= 10; $i++)
    {
        array_push($array, $i); // dodajemy do istniejacej tablicy nastepne elementy
    }
    print_r($array);

    //wynik kodu: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 )
?>