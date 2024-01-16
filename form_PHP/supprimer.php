<?php

include("contact.php");

$y->exec("DELETE FROM tableefm WHERE id=".$_GET['id']);
header('location:admin.php');

?>
