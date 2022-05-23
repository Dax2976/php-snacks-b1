<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
 Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->


<?php
$paragrafo = "Yuta Okkotsu  è uno studente di liceo nevrotico che soffre di un grave problema: la sua amica d’infanzia Rika si è trasformata in una maledizione e non lo lascerà solo, seguendolo ovunque lui vada.
Dal momento che Rika non è una Maledizione ordinaria, la sua situazione viene notata da Satoru Gojo, un insegnante della Jujutsu High, una scuola dove esorcisti alle prime armi imparano a combattere le Maledizioni. Gojo convince Yuta a iscriversi, ma può imparare quello che gli serve abbastanza in fretta per affrontare la maledizione che lo perseguita?
La storia di un ragazzo segnato da un destino oscuro cerca il modo di affrontare i propri demoni scoprendo il fascino e le insidie del mondo dell’occulto…
Protagonista del film è Yuta Okkotsu (personaggio secondario apparso in Jujutsu Kaisen) che, da bambino, ha perso la sua migliore amica, Rika, uccisa in un incidente d’auto davanti ai suoi occhi. I due si erano promessi amore eterno così, dopo l’incidente, Rika è diventato uno spirito vendicativo, mentre Yuta ha iniziato a desiderare la morte, dopo essere caduto vittima della sua maledizione.
È in questo momento della storia che fa la sua comparsa lo stregone Satoru Gojo, che accoglie Yuta all’istituto di arti occulte. Qui, Yuta fa la conoscenza di Maki Zen’in, Toge Inumaki e Panda, compagni di classe che lo aiuteranno a trovare la giusta determinazione per ritrovare fiducia in se stesso e spezzare la maledizione di Rika.
Un giorno, però, il malvagio stregone nero Suguru Geto, espulso dall’istituto per aver massacrato dei civili senza poteri, fa la sua comparsa di fronte a Yuta e ai suoi nuovi amici.
Deciso a creare un paradiso solo per gli stregoni, Geto scatena a Shinjuku e a Kyoto un migliaio di maledizioni per sterminare i senza poteri.
Riuscirà Yuta a fermarlo? E riuscirà a spezzare per sempre la maledizione di Rika?";
var_dump($paragrafo);

$paragrafo_explose = explode('.',$paragrafo, -1);
var_dump($paragrafo_explose);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 class="mx-3">Testo originale</h1>
    <p class="p-3"> <?= $paragrafo ?> </p>

    <h2 class="mx-3">Testo Diviso</h2>
    <?php foreach ($paragrafo_explose as $text) : ?>
        <p class="p-3"> <?= $text ?> </p>
    <?php endforeach ?>
</body>
</html>