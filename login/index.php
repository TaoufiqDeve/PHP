<?php

session_start();
$erorr = $erorrp ='';

    if($_GET['id'] = 1){
        session_destroy();
    }

    include('cont.php');


    if($_SESSION['login'] != ""){
        header('location:admin.php');
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST['email'])){
            $erorr = 'erorr email';
        }
        if(empty($_POST['passowrd'])){
            $erorrp = 'erorr paasowrd';
        }
    }
    

    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['email'] != '' && $_POST['passowrd'] != ''){
        $email = $_POST['email'];
        $pass = $_POST['passowrd'];


        $t = $con->prepare("SELECT * FROM tableefm");
        $t->execute();
        $infos = $t->fetchAll();
        foreach($infos as $info){
            if($info['email'] == $email && $info['pass'] == $pass){
                header("location:admin.php");
                $_SESSION['login'] = $info['id'];

            }
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
        email: <input type="text"name= "email"><?php echo $erorr ?>
        passowrd: <input type="text" name="passowrd"><?php echo $erorrp?>
        <input type="submit" value="login">
    </form>
    
</body>
</html>