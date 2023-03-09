<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script com PHP</title>
</head>
<body>
    
    <?php

        $pessoa1 = array();
        $pessoa2 = array();
        $pessoa3 = array();
        $pessoa4 = array();

        $pessoa1 [0][0][0][0][0][0] = "Alfredo Von Benetti";
        $pessoa1 [0][0][0][0][1][1] = "88";
        $pessoa1 [0][0][0][0][2][2] = "Mago das Sombras";

        $pessoa2 [0][0][0][0][0][0] = "Demarcus Torrent";
        $pessoa2 [0][0][0][0][1][1] = "65";
        $pessoa2 [0][0][0][0][2][2] = "Espadachim Mágico";

        $pessoa3 [0][0][0][0][0][0] = "Helda GröndFower";
        $pessoa3 [0][0][0][0][1][1] = "72";
        $pessoa3 [0][0][0][0][2][2] = "Druída";

        $pessoa4 [0][0][0][0][0][0] = "Wilhelm Herder";
        $pessoa4 [0][0][0][0][1][1] = "94";
        $pessoa4 [0][0][0][0][2][2] = "Lanceiro Dracônico";

        echo " O " . $pessoa1 [0][0][0][0][0][0] . " tem " . $pessoa1 [0][0][0][0][1][1] . " é um " . $pessoa1 [0][0][0][0][2][2];
        echo ("</br>");
        echo " O " . $pessoa2 [0][0][0][0][0][0] . " tem " . $pessoa2 [0][0][0][0][1][1] . " é um " . $pessoa2 [0][0][0][0][2][2];
        echo ("</br>");
        echo " A " . $pessoa3 [0][0][0][0][0][0] . " tem " . $pessoa3 [0][0][0][0][1][1] . " é uma " . $pessoa3 [0][0][0][0][2][2];
        echo ("</br>");
        echo " O " . $pessoa4 [0][0][0][0][0][0] . " tem " . $pessoa4 [0][0][0][0][1][1] . " é um " . $pessoa4 [0][0][0][0][2][2];

     ?>
    
</body>
</html>