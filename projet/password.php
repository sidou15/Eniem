<?php
session_start();
if (!isset($_SESSION['user'])) 
  header('location:login.php');

$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Modifier mot de passe</title>
	<style >

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
.panel-primary{
		width: 50%;
		margin: 5%;
		margin-left: 25%; 
    background-color: transparent;

	}
</style>
</head>
<body>
<?php include("menu.php");   ?>
<div class="container">
  
       <div class="panel panel-primary" >
        <h2 class="text-center">compte:  <?php echo $_SESSION['user']['Nom'] ?></h2>

        <div class="panel-heading">
          <h3 class="panel-title">modifier mon Mes coordonnées </h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
       

      <form method="post" action="" class="form"  >

    
     <input type="hidden" name="id" class="form-control" value=""><br>


        <label>Mot de passe actual</label><br>
         <input type="password" name="nom" class="form-control" value=""><br>
         <label>nouveau Mot de passe</label><br>
        <input type="password" name="prenom" class="form-control" value="" ><br>

        <label>Confrmer le Mot de passe </label><br>
         <input type="password" name="nom" class="form-control" value=""><br>
        


<button  style="margin-left: 20%; margin-bottom: 4%;margin-top: 2%; padding:1%; width: 20%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-check"></span> Enregestre</button> 

        
</body>
</html>