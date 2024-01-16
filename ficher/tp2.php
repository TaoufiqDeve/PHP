<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        label{
            display : inline-block;
            width: 100px;
        }
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>

<?php

    $numero = $_POST['numero'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    
        $inoform = $numero . ';' . $nom . ';' . $prenom . PHP_EOL;

        file_put_contents('form.txt', $inoform, FILE_APPEND);


$t = file('form.txt');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des stagiaires</title>
</head>
<body>
    <h1>Liste des stagiaires</h1>

    <form method="POST">
        <label for="numero">Numéro:</label>
        <input type="text" name="numero" id="numero"><br><br>

        <label for="nom">Nom:</label>
        <input type="text" name="nom" id="nom"><br><br>

        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" id="prenom"><br><br>

        <input type="submit" value="Ajouter">
    </form>

    <br>

    <table>
        <tr>
            <th>Numéro</th>
            <th>Nom</th>
            <th>Prénom</th>
        </tr>
        <?php foreach ($t as $inoform) {
            $test = explode(';', $inoform); ?>
            <tr>
                <td><?php echo $test[0]; ?></td>
                <td><?php echo $test[1]; ?></td>
                <td><?php echo $test[2]; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>

    
</body>
</html>