<?php



function somme($nombre){
    $i = $nombre;
    $compteur = 0;
    $resultat = 0;

    while($compteur >= $i)
    {
    
        $resultat = $nombre + somme($nombre - 1);
        $compteur += 1;
        
    }
    echo"La somme de tous les entiers précédents l'entier choisi est $resultat";

    // for($compteur = 0; $compteur <= $nombre; $compteur ++)
    // {
    //     $resultat += 1;
    // }

//     while($i <= $nombre)
//     {
        
//     } 
}


somme(5);