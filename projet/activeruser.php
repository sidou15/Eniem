<?php
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);

$ids=isset($_GET['id'])?$_GET['id']:0;
$etat=isset($_GET['etat'])?$_GET['etat']:0;

if($etat==1)

	$newetat=0;



else
	
	$newetat=1;


$req="UPDATE user set etat=? where ID=?";
$param= array($newetat,$ids);
$result=$db->prepare($req);
$result->execute($param);

header('location:http://127.0.0.1/projet/Gestion-user.php');

?>