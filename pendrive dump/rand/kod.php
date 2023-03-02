<?php 
    $a=$_POST['od'];
    $b=$_POST['do'];
    $w=rand($a, $b);
    if ($w%2==0){
        include 'head.html';
        include 'main.html';
        include 'footer.html';
    }
    else{
        echo "wylosowałeś nie parzystą liczbe<br>";
        echo $w;
    }
?>