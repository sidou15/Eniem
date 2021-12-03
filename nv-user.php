<?php
session_start();
if (!isset($_SESSION['user'])) 
  header('location:login.php');
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);
?>
<!DOCTYPE html >
<html lang="fr">
<head>
	<title>Ajouter un Patient</title>
  <link  rel="icon" type="img/icon" href="img/logo.jfif">
	<style>
input[type=text] {
    width: 60%;  
    padding: 10px 5px ;
    margin-left: 20%;
   border-radius: 15px;
   box-shadow: 4px 4px 6px white;

}
input[type=password]{
width: 60%;  
    padding: 10px 5px ;
    margin-left: 20%;
   border-radius: 15px;
   box-shadow: 4px 4px 6px white;
}
input[type=date]{
width: 60%;  
    padding: 10px 5px ;
    margin-left: 20%;
   border-radius: 15px;
   box-shadow: 4px 4px 6px white;
}
input[type=tel]{
  width: 60%;  
    padding: 10px 5px ;
    margin-left: 20%;
   border-radius: 15px;
   box-shadow: 4px 4px 6px white;
}


label{
	margin-left: 20%;
}

  select{
      width: 20%;
      margin-right: 20%;
      margin-left: 20%;
       border-radius: 15px;
        padding: 10px 5px ;

    }
  option{
     border-radius: 15px;
      padding: 10px 5px ;
  }



	</style>
</head>
<body>


<?php include("menu.php");   ?>

<div class="container">
  
       <div class="panel panel-primary" >

        <div class="panel-heading">
          <h3 class="panel-title">Ajouter un Patient  </h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>

      <form method="post" action="ajouter-user.php" class="form">
        <label>Nom</label><br>
         <input type="text" name="nom" class="form-control"><br>
         <label>Prenom</label><br>
        <input type="text" name="prenom" class="form-control"><br>
        <label>Email</label><br>
        <input type="text" name="email" class="form-control"><br>
        <label>Password</label><br>
        <input type="password" name="password" class="form-control"><br>
        <label>Telephone</label><br>
        <input type="tel" name="telephone" class="form-control"><br>
        <label>Date de naissance</label><br>
        <input type="date" name="birth" class="form-control"><br>



        <div>
           &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
         <select name="role" class="" >

           
        <option  value="admin">Admin</option>
        <option value="patient">visiteur</option>
        <option value="medecin">medecin</option>
          </select>

        </div>
        
        

        <button  style="margin-left: 20%; margin-bottom: 4%;margin-top: 2%; padding:1%; width: 9%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-plus-sign  
 "></span> Ajouter</button> 

        <a href="http://127.0.0.1/projet/Gestion-user.php" style="margin-left: 5%; margin-bottom: 4%;margin-top: 2%; padding:1.2%; width: 9%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-circle-arrow-left"></span> Retour</a>  
      </form>
</div>


</body>
</html>
