<?php
session_start();
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);


$login=isset($_POST['email'])?$_POST['email']:"";
$Password=isset($_POST['password'])?$_POST['password']:"";

if (empty($_POST['email']) || empty($_POST['password'])) {
		
		$_SESSION['erreurlogin']="<strong>ERREUR!!:</strong>  Veuillez complétez le champ";		
		header('location:http://127.0.0.1/projet/login.php');

	}
	else 
	{

$req="SELECT * from user  where Email='$login' and Password='$Password'" ;
 

$result=$db->query($req);

if ($user=$result->fetch()){
	
	if ($user['etat']==1){
		$_SESSION['user']=$user;
		
		header('location:http://127.0.0.1/projet/page-admin.php');

	}else{
	$_SESSION['erreurlogin']="<strong>ERREUR!!:</strong>votre compte est actuellement désactivé.veuillez contacter votre administrateur";		
		header('location:http://127.0.0.1/projet/login.php');
		
	}
}else{
		$_SESSION['erreurlogin']="<strong>ERREUR!!:</strong> votre email ou mot de passe est incorrect. veuillez le vérifier ";
		header('location:login.php');
	}
	
}
?>