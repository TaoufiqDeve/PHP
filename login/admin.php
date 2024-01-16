<?php


session_start();
include('cont.php');
if($_SESSION['login'] == ""){
    header('location:index.php');
}


$t = $con->prepare("SELECT * FROM tableefm WHERE id=" . $_SESSION['login']);
$t->execute();
$infos = $t->fetchAll();

echo "bongour" . " " . $infos[0]['nom'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php?id=1">dconect</a>
</body>
</html>