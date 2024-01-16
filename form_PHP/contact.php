<?php

 $host = 'localhost';
 $dbname = 'efm';
 $username = 'root';
 $password = '';


 try{
    $y = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
 }catch(PDOException $o) {
    echo $o->getMessage();
 }
;
 