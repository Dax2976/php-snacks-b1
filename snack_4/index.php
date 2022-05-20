<!-- Creare un array con 15 numeri casuali, 
tenendo 
conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
    $arrayn15 = [];
    while(count($arrayn15)<15){
        $random_number = rand(1,200); //generazione 1 a 200
        if(!in_array($random_number,$arrayn15)){
            $arrayn15[] = $random_number; // push numeri diversi tra loro
        }
    }  
    
    var_dump($arrayn15)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 4</title>
</head>
<body>
    
</body>
</html>