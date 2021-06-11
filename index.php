<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Exercice 6</title>
</head>
<body>
    <p>
        Créer une variable magnitude allant de 1 à 9. Gérer l'affichage selon la magnitude : 
    </p>
    <div class="col-3 mx-auto mt-5 text-center" style="border: burlywood 2px solid;">
        <?php
            $magnitude = mt_rand(1,9); /* Variable contenant un random de 1 à 9 */

            echo 'Magnitude ' .$magnitude. ' :</br>';

            if($magnitude == 1){
                echo 'Micro-séisme impossible à ressentir';
            }else if($magnitude == 2){
                echo 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres';
            }else if($magnitude == 3){
                echo 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti';
            }else if($magnitude == 4){
                echo 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats';
            }else if($magnitude == 5){
                echo 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes';
            }else if($magnitude == 6){
                echo 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre';
            }else if($magnitude == 7){
                echo 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance';
            }else if($magnitude == 8){
                echo 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres';
            }else{
                echo 'Séisme capable de tout détruire sur une très vaste zone';
            }
        ?>
        <p><?= var_dump($magnitude)?></p> <!-- Contrôle du random magnitude -->
    </div>
</body>
</html>