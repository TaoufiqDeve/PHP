<?php
    include('inc_connnexion.php');

    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['sujet'] != "" && $_POST['message'] != ""){
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];

        $l = $y->prepare("SELECT * FROM clients");
        $l->execute();
        $infos = $l->fetchAll();
        foreach($infos as $info){
            mail($info['Email'],$sujet,$message);
        }
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
        sujet: <input type="text" name="sujet">
        message: <input type="text" name="message">
        <input type="submit">
    </form>
    
</body>
</html>