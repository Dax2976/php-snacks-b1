<?php
$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];

$check = strpos($email, '@');
$check2 = strpos($email, '.')



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="name" placeholder="inserisci il tuo nome">
        <input type="text" name="email" placeholder="inserisci la tua email">
        <input type="text" name="age" placeholder="inserisci la tua eta">
        <button type="submit">Invia</button>
    </form>
    <?php
    if(strlen($name)>3 && $check == true && $check2 == true && is_numeric($age)){
        echo '<h2>Accesso Riuscito</h2>';
    } else {
        echo '<h2>Accesso Negato</h2>';
    }
    ?>

</body>
</html>