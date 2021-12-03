<?php
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);

$nom=isset($_POST['nom'])?$_POST['nom']:"";
$prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
$id=isset($_POST['id'])?$_POST['id']:"";
$email=isset($_POST['email'])?$_POST['email']:"";
$telephone=isset($_POST['telephone'])?$_POST['telephone']:"";
$pass=isset($_POST['password'])?$_POST['password']:"";
$naissance=isset($_POST['naissance'])?$_POST['naissance']:"";

$req="INSERT INTO users (Nom,Prenom,id,Email,telephone,password,naissance) values (?,?,?,?,?,?,?)";
$parm= array($nom,$prenom,$id,$email,$telephone,$pass,$naissance);
$result=$db->prepare($req);
$result->execute($parm);
header('location:Gestion-med.php');

?>