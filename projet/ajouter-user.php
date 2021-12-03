<?php
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);

$nom=isset($_POST['nom'])?$_POST['nom']:"";
$prenom=isset($_POST['prenom'])?$_POST['prenom']:"";
$id=isset($_POST['id'])?$_POST['id']:"";
$email=isset($_POST['email'])?$_POST['email']:"";
$tel=isset($_POST['telephone'])?$_POST['telephone']:"";
$rol=isset($_POST['role'])?$_POST['role']:"";
$psw=isset($_POST['password'])?$_POST['password']:"";


$req="INSERT INTO  user (Nom,Prenom,ID,Email,telephone,role,Password) values (?,?,?,?,?,?,?)";
$parm= array($nom,$prenom,$id,$email,$tel,$rol,$psw);
$result=$db->prepare($req);
$result->execute($parm);
header('location:Gestion-user.php');

?>