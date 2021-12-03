<?php

require_once('cnx.php');
 session_start();
if (isset($_POST['login'])) {
	

	if (empty($_POST['email']) || empty($_POST['password'])) {
		
		header("location:login.php?empty=<div class='alert alert-danger' role='alert'>Veuillez complétez le champ!! </div");

	}
	else 
	{
		$req="SELECT * from user where Email='$login' and Password='$Password'";
		/*
		$req="SELECT * from  user  where Email='".$_POST['email']."' && Password= '".$_POST['password']."'"; */
		$result=mysqli_query($con,$req);
		 	if ($user['etat']==1){
		$_SESSION['user']=$user;
		header('location:http://127.0.0.1/projet/page-admin.php');

	}
	if ($user['etat']==1) {
		$_SESSION['user']=$user;
	}
	{
		$_SESSION['erreurlogin']="votre compte est désactivé veuillez contacter l'admin";
		header('location:http://127.0.0.1/projet/login.php');
	}

}
}else{
	
		$_SESSION['erreurlogin']="votre mot de pss est inccorect";
		header('location:login.php');
	}


 ?>