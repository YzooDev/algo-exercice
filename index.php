<?php
    function addition($num1, $num2){
        //Code de la fonction
        $resultat = $num1 + $num2;
        return $resultat;
    };

    echo "<p>Le Résultat de 2 + 5 est de : {$addition(2, 5)}</p>";

    $counter = 10;
    while($counter > 0){
        echo "<p>Le nombre est : $counter</p>";
        $counter--;
    }

    $myTab = ["Jeff","Mathieu","Yann","Yoann"];

    function displayTab($tab){
        for ($i=0; $i < sizeof($tab); $i++) { 
            $index_pair = 0;
            if (fmod($i, 2) = 0) {
                $index_pair = $i;
            }
            echo {$tab[i]}. "à l'index pair : $i <br>";
        }
    };

    displayTab($myTab);

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>