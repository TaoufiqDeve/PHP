<?php
$host = 'localhost';
$dbname = 'efm';
$dbuser = 'root';
$passord = '';

try{
    $con = new PDO("mysql:host=$host;dbname=$dbname",$dbuser,$passord);

}catch(PDEException $o){
    echo $o->getMessage();
}

?>