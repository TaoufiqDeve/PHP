<?php

include("inc_connnexion.php");

$o = $y->prepare('SELECT * FROM clients WHERE id = ' . $_GET['id']);
$o->execute();
$infos = $o->fetchAll();

if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST['nom'] != "" && $_POST['prenom'] != "" && $_POST['email'] != "" && $_POST['cin'] != "" && $_POST['adr'] != "" && $_POST['tel']!= ""){
    $nom = $_POST['nom'];
    $prenom= $_POST['prenom'];
    $CIN= $_POST['cin'];
    $Adr= $_POST['adr'];
    $email= $_POST['email'];
    $Tel= $_POST['tel'];
    
    $y->exec("UPDATE clients SET nom='$nom',prenom='$prenom',CIN='$CIN',Adr='$Adr',Email='$email',Tel='$Tel' WHERE id=" .$_GET['id']);
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
        CIN: <input type="text" name="cin" value = '<?= $infos[0]['CIN']?>'>
        Adr: <input type="text" name="adr" value = '<?= $infos[0]['Adr']?>'>
        email: <input type="text" name="email" value = '<?= $infos[0]['Email']?>'>
        Tel: <input type="text" name="tel" value = '<?= $infos[0]['Tel']?>'>
        <input type="submit" value="modefier">
    </form>
    
</body>
</html>