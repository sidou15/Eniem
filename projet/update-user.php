<?php
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);

$ids=isset($_POST['ID'])?$_POST['ID']:0;
$nom=isset($_POST['nom'])?$_POST['nom']:"";
$prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
$email=isset($_POST['email'])?$_POST['email']:"";
$telephone=isset($_POST['telephone'])?$_POST['telephone']:"";
$role=isset($_POST['Role'])?$_POST['Role']:"";

$req="UPDATE user set nom=?,prenom=?,email=?,telephone=?,Role=? where ID=? ";
$param= array($nom,$prenom,$email,$telephone,$role,$ids);
$result=$db->prepare($req);
$result->execute($param);

header('location:http://127.0.0.1/projet/Gestion-user.php');



?>