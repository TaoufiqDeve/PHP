<?php
include("inc_connnexion.php");

$erorr = '';



if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['nom'] != "" && $_POST['prenom']!="" && $_POST['email'] != "" && $_POST['cin'] != "" && $_POST['adr'] != "" && $_POST['tel'] != ""){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $cin = $_POST['cin'];
    $Adr = $_POST['adr'];
    $tel = $_POST['tel'];

    $y->exec("INSERT INTO clients (nom,prenom,CIN,Adr,Email,Tel) VALUES ('$nom','$prenom','$cin','$Adr','$email','$tel')");
    header("location:admin.php");
}

if(empty($_POST['nom']) || empty($_POST['prenom']) || empty($_POST['email']) || empty($_POST['cin'])|| empty($_POST['adr'])|| empty($_POST['tel']))
{
    echo $erorr = 'des donnees est manquante';
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
        nom: <input type="text" name="nom">
        prenom: <input type="text" name="prenom">
        CIN: <input type="text" name="cin">
        Adr: <input type="text" name="adr">
        email: <input type="text" name="email">
        Tel: <input type="text" name="tel">
        <input type="submit">
    </form>
    
</body>
</html>