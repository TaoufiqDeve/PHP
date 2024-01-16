<?php
include("contact.php");

if($_SERVER["REQUEST_METHOD"] == "POST" && $nom = $_POST['nom'] != "" && $prenom = $_POST['prenom']!="" &&     $email = $_POST['email'] != ""){
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $photo = $_FILES['file']['name'];
    $photo_tmp = $_FILES['file']['tmp_name'];

    move_uploaded_file($photo_tmp,'C:\xampp\htdocs\php\test\image\\' . $photo);

    $y->exec("INSERT INTO tableefm (photo,nom,prenom,email) VALUES ('$photo','$nom','$prenom','$email')");
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
        nom: <input type="text" name="nom">
        prenom: <input type="text" name="prenom">
        email: <input type="text" name="email">
        photo: <input type="file" name="file">
        <input type="submit">
    </form>
    
</body>
</html>