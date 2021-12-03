
<?php
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);
 
if (isset($_GET['logout'])) {
	session_unset();
	session_destroy();
	header('location:http://127.0.0.1/projet/connexion.php');
}
?>