<?php 
    $a=$_POST['liczba1'];
    $b=$_POST['liczba2'];
    $c=$_POST['sel'];
    //isset() - sprawdza czy zmienna jest ustawiona
    if(isSet($a) && isSet($b))
    {
        echo " zmienne sa ustawione";
    }

    //!empty - sprawdza czy zmienna nie jest pusta
    if(!empty($a) && !empty($b)){
        echo " wszystkie dane poprawne";
    }
    else{
        echo " uzupełnij dane";
    }
    if($a !=0 && $b !=0)
    {
        switch ($c)
        {
            case 1:
                $wynik=$a+$b;
                echo " suma podanych liczb: ".$a. " i ".$b . " wynosi:  ". $wynik;
                break;
            case 2:
                $wynik=$a-$b;
                echo " różnica podanych liczb: ".$a. " i ".$b . " wynosi:  ". $wynik;
                break;
            case 3:
                $wynik=$a*$b;
                echo " iloczyn podanych liczb: ".$a. " i ".$b . " wynosi:  ". $wynik;
                break;
            case 4:
                $wynik=$a/$b;
                echo " iloraz podanych liczb: ".$a. " i ".$b . " wynosi:  ". $wynik;
                break;
        }
    }
    else{
        echo " podałeś 0";
    }
?>