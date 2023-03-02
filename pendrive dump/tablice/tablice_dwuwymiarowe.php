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
        $array = [ //tablica 2 wymiarowa
            "warzywa" => [ //tablica 1 wymiarowa
                "warzywo1" => "pomidor",
                "warzywo2" => "ogórek",
                "warzywo3" => "papryka"
            ],
            "owoce" => [ //tablica 1 wymiarowa
                "owoc1" => "mandarynka",
                "owoc2" => "śliwka",
                "owoc3" => "jabłko"
            ],
            "komputery" => [ //tablica 1 wymiarowa
                "komputer1" => "płyta główna",
                "komputer2" => "procesor",
                "komputer3" => "karta graficzna"
            ],
        ];
        var_dump($array);
        echo("<br><br><br>");
        var_export($array);
        echo("<br><br><br>");
        print_r($array);
        echo("<br><br><br>");
        
        //-------------------------------------------------------------------------

        $kotakt = []; //deklaracja tablicy 

        // pierwszy kontakt
        $kotakt['imie'] = 'Adam';
        $kontakt['nazwisko'] = 'Kowalski';
        $kontakt['telefon'] = '123456789';

        $kontakty = []; //deklaracja tablicy

        // w tym momencie tablica $kontakty staje się już tablicą 2-wymiarową,
        // ponieważ wsawiamy do niej tablicę $kontakt, tworzymy tablicę tablic
        array_push($kontakty,$kontakt);

        // drugi kontakt, wypełniamy ponownie tablicę $kontakt
        $kontakt['imie'] = 'Ewa';
        $kontakt['nazwisko'] = 'Nowakówna';
        $kontakt['telefon'] = '987654321';

        // zamiast  array_push możesz użyć formy skróconej []
        $kontakty[] = $kontakt;

        print_r($kontakty); // jak wygląd tablica w programie?

        print "<br>";
        printf("Imię pierwszego kontaktu to: %s<br>", $kontakty[0]['imie']);

        print "<br>Lista kontaktów:<br>";

        $e = count($kontakty); // ile elementów ma tablica?

        //dostęp do elementów tablict
        for ($i = 0; $i < $e; $i++){
            printf(
                "%s\t%s\ttel. %s<br>",  // co to takiego
                $kontakty[$i]['imie'],
                $kontakty[$i]['nazwisko'],
                $kontakty[$i]['telefon']
            );
        }
    ?>
</body>
</html>