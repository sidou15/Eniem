<?php 
session_start();
if (!isset($_SESSION['user'])) 
  header('location:login.php');
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);

$id=isset($_GET['id'])?$_GET['id']:0;
$sl="SELECT * FROM user where ID=$id";
$result=$db->query($sl);
$stg=$result->fetch();
$nom=$stg['Nom'];
$prenom=$stg['Prenom'];
$email=$stg['Email'];
$telephone=$stg['telephone'];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>modifier mon compte</title>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta charset="utf-8">
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
          <h3 class="panel-title">Modifier mes coordonnées </h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
       

      <form method="post" action="modifier-compte.php" class="form"  >
    
    <label for="id user: ">id: <?php echo $id ?></label>
     <input type="hidden" name="id" class="form-control" value="<?php echo $id ?> "><br>




        <label>Nom</label><br>
         <input type="text" name="nom" class="form-control" value="<?php echo $nom ?>"><br>
         <label>Prenom</label><br>
        <input type="text" name="prenom" class="form-control" value="<?php echo $prenom ?>" ><br>
        <label>Email </label><br>
        <input  type="text" name="email" class="form-control" value="<?php echo $email ?>"><br>
        <label>Téléphone</label><br>
        <input  type="tel" name="telephone" class="form-control" value="<?php echo $telephone ?>"><br>


<button  style="margin-left: 20%; margin-bottom: 4%;margin-top: 2%; padding:1%; width: 20%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-check"></span> Modifier</button> 

        
        &nbsp &nbsp &nbsp
         
         <a href="password.php"><span class="glyphicon glyphicon-lock" ></span>Changer le mot de passe</a>
      </form>
     
</body>
</html>