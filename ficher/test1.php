<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        nom:<input type="text" name='nom'>
        prenom:<input type="text" name='prenom'>
        <input type="submit">
    </form>
    <?php
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];

        $s = $nom . '/' . $prenom . PHP_EOL;
        file_put_contents("form.txt",$s,FILE_APPEND);

        $H = file('form.txt')
        ?>
        <table border = "1">
            <?php foreach ($H as $q){
                $j = explode("/",$q);
                }?>
            <tr>
                <th>nom</th>
                <th>prenom</th>
            </tr>
            <tr>
                <th><?=$j[0]?></th>
                <th><?=$j[1]?></th>
            </tr>
        </table>
</body>
</html>