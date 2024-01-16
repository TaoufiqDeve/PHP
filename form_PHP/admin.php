<?php

include('contact.php');

$l = $y->prepare("SELECT * FROM tableefm");
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

<style>
    img{
        width: 100px;
        height: 100px;
    }
</style>
    <table>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>email</th>
        </tr>
        <?php foreach($infos as $info):?>
            <tr>
                <th><?=$info['nom']?></th>
                <th><?=$info['prenom']?></th>
                <th><?=$info['email']?></th>
                <th><img  src="<?= 'image\\' . $info['photo']?>" alt=""></th>
                <th><a href="modefier.php?id=<?=$info['id']?>">modefier</a></th>
                <th><a href="supprimer.php?id=<?=$info['id']?>" onclick="confirm('Voulez-vous vraiment supprimer ce client?')" >supprimer</a></th>
            </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>