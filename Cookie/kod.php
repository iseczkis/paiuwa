<?php
    error_reporting(0); //ukrycie błędów
    if(!isset($_COOKIE['nazwa']) && !isset($_POST['nazwa']))
    {
        include "cookie1.html";
        include "formularz.html";
        include "cookie2.html";
    }

    elseif(isset($_POST['nazwa']))
    {
        //warto dodac instrukcje weryfikujace poprawnośc danych
        setcookie("nazwa", $_POST['nazwa'], time() + 60);
        include "cookie1.html";
        echo "<p>Dziękujemy za podanie danych.</p>";
        include "cookie2.html";
    }

    else
    {
        //warto dodac instrukcje weryfikujace poprawnośc danych
        include "cookie1.html";
        echo "Witamy, zostałeś rozpoznany jako {$_COOKIE['nazwa']}.";
        include "cookie2.html";
    }
//Zaproponuj skrypt i go wykonaj. Skrypt ma za zadanie podać ile rady użytkownik był na stronie w ciągu pięciu minut
?>
