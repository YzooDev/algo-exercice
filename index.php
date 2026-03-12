<?php
    function addition($num1, $num2){
        //Code de la fonction
        $result = $num1 + $num2;
        return $result;
    };

    $resultAdd = addition(2, 5);
    echo "<p>Le Résultat de 2 + 5 est de : {$resultAdd}</p>";

    $counter = 10;
    while($counter > 0){
        echo "<p>Le nombre est : $counter</p>";
        $counter--;
    }

    $myTab = ["Jeff","Mathieu","Yann","Yoann"];

    function displayTab($tab){
        for ($i=0; $i < sizeof($tab); $i++) {
            if (fmod($i, 2) == 0) {
                echo $tab[$i]."  à l'index pair : $i";
            }   
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