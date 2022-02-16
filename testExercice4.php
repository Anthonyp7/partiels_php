<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercice 4</title>
</head>
<body>

    <?php

    require_once("");
    

    

    if ($_POST['recherche'] == "anthony.perozeni777@gmail.com" and $_POST['mdp'] == "introuvable")
    {
        ?>
        

            
            

        <button>Supprimer</button>
        <?php
        

    }

    else
    {
        echo "La personne que vous recherchez est introuvable. Veuillez réessayer.";
    }
    ?>
</body>
</html>

