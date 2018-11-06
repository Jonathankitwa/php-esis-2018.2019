<?php
    $bdd =new PDO('mysql:host=localhost;dbname=tp_php', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    $requete=$bdd->prepare('INSERT INTO expliquesimplement(pseudo,motpasse,email,sexe) VALUES(?,?,?,?)');
    $requete->execute(array($_POST['pseudo'], $_POST['motpasse'], $_POST['email'], $_POST['genre']));
 ?>