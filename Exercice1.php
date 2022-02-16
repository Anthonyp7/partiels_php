<?php
## QUESTION A ##

 
function multiplication($table){
    $compteur = 0;
    $resultat = 0;
    $i = 0;
    while($compteur < 10){
        $compteur += 1;
        $resultat = $compteur * $table;
        echo"$compteur * $table = $resultat <br>";
    }

    for($i = 0; $i <= 10; $i ++){

    }
}

multiplication(5);




## QUESTION B ##

function multiplication2(){

    $resultat = 0;
    $i = 0;
    $nombre = 1;

    for ($compteur=0; $compteur < 10; $compteur++){

        echo "<br><br> Table de $nombre : <br><br>";
        while($i <= 10){
            
            $resultat = $nombre * $i;
            echo "$nombre * $i = $resultat <br>";
            $i += 1;
        }

        $i = 0;
        $nombre += 1;

    }
}

multiplication2()



?>
