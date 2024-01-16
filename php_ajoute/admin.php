<?php

include('inc_connnexion.php');

$l = $y->prepare("SELECT * FROM clients");
$l->execute();
$infos = $l->fetchAll();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
                <th><?=$info['id']?></th>
                <th><?=$info['nom']?></th>
                <th><?=$info['prenom']?></th>
                <th><?=$info['Email']?></th>
                <th><a href="modefier.php?id=<?=$info['id']?>">modefier</a></th>
                <th><a href="supprimer.php?id=<?=$info['id']?>" >supprimer</a></th>
            </tr>
        <?php endforeach ?>
    </table>
    <a href="chercher.php">chercher</a>
    
</body>
</html>