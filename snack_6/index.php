<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
    $teachers = $db['teachers'];
    $pm = $db['pm'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="grey">
    <h2>Teachers</h2>
    <?php for ($i=0; $i <count($teachers); $i++) { 
        $teacher = $teachers[$i];
        ?>
        <p>Nome: <?= $teacher['name']?> </p>
        <p>Cognome: <?= $teacher['lastname'] ?></p>
    <?php } ?>
</div>

<div class="green">
    <h2>Pm</h2>
    <?php for ($i=0; $i <count($pm) ; $i++) { 
        $p = $pm[$i];
        ?>
        <p>Nome: <?= $p['name'];?></p>
        <p>Cognome: <?= $p['lastname']; ?></p>
    <?php } ?>
</div>
    
<style>
    .grey{
        background-color:grey;
    }

    .green{
        background-color:green;
    }
</style>
</body>
</html>