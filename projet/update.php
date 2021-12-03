<?php
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);

$ids=isset($_POST['id'])?$_POST['id']:0;
$nom=isset($_POST['nom'])?$_POST['nom']:"";
$prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
$email=isset($_POST['email'])?$_POST['email']:"";
$telephone=isset($_POST['telephone'])?$_POST['telephone']:"";


$req="UPDATE users set nom=?,prenom=?,email=?,telephone=? where id=? ";
$param= array($nom,$prenom,$email,$telephone,$ids);
$result=$db->prepare($req);
$result->execute($param);

header('location:http://127.0.0.1/projet/Gestion-med.php');



?>