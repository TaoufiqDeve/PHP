<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php

$j = 'taoufiq' . ':' . 'issaoui' . ':' . 'don' . PHP_EOL;
file_put_contents('test.txt', $j, FILE_APPEND); ?>



  <?php $y = file('test.txt') ?>
    
    <?php
    foreach ($y as $i){
        $t = explode(':',$i);} ?>

    <p><?php echo $t[0]?></p>
    <p><?php echo $t[1]?></p>
    <p><?php echo $t[2]?></p>
    
</body>
</html>