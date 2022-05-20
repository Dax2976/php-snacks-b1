
    
    
<!-- Creiamo un array contenente le partite di basket 
di un’ipotetica tappa del calendario. Ogni array avrà una squadra 
di casa e una squadra ospite, punti fatti dalla squadra di casa e punti 
fatti dalla squadra ospite. Stampiamo a schermo 
tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->




<?php
$matches = [
    [
        'team1' => 'Los Angeles Lakers',
        'team2' => 'Detroit Pistons',
        'team1_point' => '82',
        'team2_point' => '113',
    ],
    [
        'team1' => 'Chicago Bulls',
        'team2' => 'Bucks',
        'team1_point' => '98',
        'team2_point' => '102',
    ],
    [
        'team1' => 'Golden State Warriors',
        'team2' => 'Orlando Magic',
        'team1_point' => '112',
        'team2_point' => '111',
    ],
];

var_dump($matches)


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack1</title>
</head>
<body>
    <div class="results">
        <?php

       for($i = 0; $i < count($matches); $i++){

        echo $matches[$i]['team1'] . " - " . $matches[$i]['team2'] . " | ";

        echo $matches[$i]['team1_point'] . "-";

        echo $matches[$i]['team2_point'] . "<br>";

       }
       ?>
    </div>
</body>
</html>

<style>
    .results{
        padding:20px;
    }
</style>