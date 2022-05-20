<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
 Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php
    $alunni_classe = [
        [
            'name' => 'Giorgio',
            'cognome'=> 'Buongiorgio',
            'voti'=> [10,3,4,5,6,7]
        ],
        [
            'name' => 'Giovanni',
            'cognome'=> 'Buongiovanni',
            'voti'=> [5,9,6,2,6]
        ],
        [
            'name' => 'Davide',
            'cognome'=> 'Buondavide',
            'voti'=> [1,4,6,8,0]
        ]
        ];
    var_dump($alunni_classe);
    for($i = 0; $i<count($alunni_classe); $i++){
        $voti_alunni = count($alunni_classe[$i]['voti']);
        $voto = 0;
        for($index = 0; $index<$voti_alunni;$index++){
            $voto += $alunni_classe[$i]['voti'][$index];

        }
        $media_voto = $voto / $voti_alunni;

        echo 'nome: '. $alunni_classe[$i]['name'] . '<br>' . 'cognome: ' . $alunni_classe[$i]['cognome'] . '<br>' . 'media voti: ' . $media_voto . '<br><br> ';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>snack 7</title>
</head>
<body>
    
</body>
</html>