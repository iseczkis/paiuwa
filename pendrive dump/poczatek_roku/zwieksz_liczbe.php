<!-- przekazywanie argumentów do funkcji 
argumenty do funkcji mogą byc przekazywane na dwa sposoby:
-przez wartość
-przez referencje
Domyślnie przekazywanie argumentów do funkcji odbywa się przez wartść. Polega to 
na tym że do funkcji przekazuje się kopie argumentów źródłowych i wszystkie działanie 
funkcji wykonuje się na kopiach -->

<?php 
function zwieksz_liczbe($x)
{
    $x+=6; //zwiekszenie liczby o 6
}
$x=5;
echo "Przed wywołaniem funkcji x=".$x;
zwieksz_liczbe($x);
echo "<br> Po wywołaniu funkcji x=".$x;
?>

<?php 
function zwieksz_liczbe2(&$x)
{
    $x+=6; //zwiekszenie liczby o 6
}
$x=5;
echo "<br><br>Przed wywołaniem funkcji x=".$x;  
zwieksz_liczbe2($x);
echo "<br> Po wywołaniu funkcji x=".$x;
?>

<?php 
function pole_trojkata($x=6, $y=4)
{
    return($x*$y)/2;
}
$pole1=pole_trojkata();
echo "<br><br>Funkcja z argumentami domyślnymi daje wartość: ".$pole1;
$pole2=pole_trojkata(7,8);
echo "<br>Funkcja bez argumentów domyślnych daje wartość:".$pole2;
?>