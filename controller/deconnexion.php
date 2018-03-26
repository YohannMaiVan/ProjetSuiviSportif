<?php
session_start();
//Vider les variables de sessions
$_SESSION = array();
session_destroy();
header("Location: connexion.php");
?>
