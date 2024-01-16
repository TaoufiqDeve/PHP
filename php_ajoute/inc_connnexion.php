<?php

include('inc_config.php');


 try{
    $y = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
 }catch(PDOException $o) {
    echo $o->getMessage();
 }
;
 