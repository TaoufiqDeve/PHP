<?php

include("inc_connnexion.php");

$y->exec("DELETE FROM clients WHERE id=".$_GET['id']);
header('location:admin.php');

?>
