<meta charset="utf-8">
<?php
require_once('cnx.php');
session_start();
$_SESSION=array();
session_destroy();
header('location:connexion.php');

?>