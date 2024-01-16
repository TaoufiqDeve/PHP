<?php

include('inc_connnexion.php');


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    
    $l = $y->prepare("SELECT * FROM clients WHERE id='$id' OR nom='$nom' OR prenom='$prenom' OR Email = '$email'");
    $l->execute();
    $infos = $l->fetchAll();
}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        id: <input type="text" name="id">
        nom: <input type="text" name="nom">
        prenom: <input type="text" name="prenom">
        email: <input type="text" name="email">
        <input type="submit" value = "chercher">
    </form>
    <table>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
            <th>Actions</th>
        </tr>
        <?php foreach($infos as $info):?>
            <tr>
                <th><?=$infos[0]['id']?></th>
                <th><?=$infos[0]['nom']?></th>
                <th><?=$infos[0]['prenom']?></th>
                <th><?=$infos[0]['Email']?></th>
                <th><a href="modefier.php?id=<?=$infos[0]['id']?>">modefier</a></th>
                <th><a href="supprimer.php?id=<?=$infos[0]['id']?>" >supprimer</a></th>
            </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>