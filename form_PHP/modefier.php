<?php

include("contact.php");

$o = $y->prepare('SELECT * FROM tableefm WHERE id = ' . $_GET['id']);
$o->execute();
$infos = $o->fetchAll();

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['nom'] != "" && $_POST['prenom'] != "" && $_POST['email'] != ""){
    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $email= $_POST['email'];
    $photo_modefier = $_FILES['fileM']['name'];
    $photo_uploade = $_FILES['fileM']['tmp_name'];


    move_uploaded_file($photo_uploade,'image\\' . $photo_modefier);

    $y->exec("UPDATE tableefm SET photo = '$photo_modefier' , nom='$nom',prenom='$prenom',email='$email' WHERE id=" .$_GET['id']);
    header("location:admin.php");



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
    <form action="" method="POST" enctype = "multipart/form-data">
        nom: <input type="text" name="nom" value = '<?= $infos[0]['nom']?>'>
        prenom: <input type="text"  name="prenom" value = '<?= $infos[0]['prenom']?>'>
        email: <input type="text" name="email" value = '<?= $infos[0]['email']?>'>
        photo: <input type="file" name="fileM">
        <input type="submit" value="modefier">
    </form>
    
</body>
</html>