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
    for ($i = 1; $i <= 2; $i++) {
        mkdir("C:\\xampp\\htdocs\\klasa2m_gr1\\"."xyz".$i."3");
    }
    mkdir("C:\\xampp\\htdocs\\klasa2m_gr1\\xyz13\\"."abc1");
    mkdir("C:\\xampp\\htdocs\\klasa2m_gr1\\xyz23\\"."abc2");
    for ($i = 1; $i <= 2; $i++) {
        $plik=("abc".$i.".txt")
        fopen("abc.txt","w");
    }
    ?>
</body>
</html>