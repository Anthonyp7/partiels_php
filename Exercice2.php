<?php



function somme($nombre){

    while($nombre >= 0)
    {
        if ($nombre == 0)    
            return 0;
        return ($nombre + somme ($nombre -1));
    }

    echo"Veuillez sélectionné un nombre positif";    
    
}


echo somme(3);
