<?php

    $bdd =new PDO('mysql:host=localhost;dbname=tp_php', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $resultat= $bdd->query('SELECT pseudo, motpasse FROM expliquesimplement');

    while($donnees = $resultat->fetch())
    {
        if($donnees['pseudo'] == $_POST['first_name'] && $donnees['motpasse'] == $_POST['password'])
        {
            echo $donnees['pseudo'] . 'welcome dans votre base de donnee';
        }
        else
        {
            echo 'erreur veillez recommencer';
        }
    }
?>