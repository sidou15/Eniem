<?php
session_start();
if (!isset($_SESSION['user'])) 
  header('location:login.php');

$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);

$idm=isset($_GET['id'])?$_GET['id']:0;
$sl="SELECT * FROM users where id=$idm";
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
  <title>Editer un médcin</title>
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

  </style>
</head>
<body>

<?php include("menu.php");   ?>

<div class="container">
  
       <div class="panel panel-primary" >

        <div class="panel-heading">
          <h3 class="panel-title">Edition d'un médecin</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
       

      <form method="post" action="update.php" class="form"  >

     <label for="niveau" >id :<?php echo $idm; ?> </label>
     <input type="hidden" name="id" class="form-control" value="<?php echo $idm ?>"><br>


        <label>Nom</label><br>
         <input type="text" name="nom" class="form-control" value="<?php echo $nom  ?>"><br>
         <label>prenom</label><br>
        <input type="text" name="prenom" class="form-control" value="<?php echo $prenom  ?>" ><br>
        <label>email</label><br>
        <input type="text" name="email" class="form-control" value="<?php echo $email  ?>"><br>
        <label>téléphone</label><br>
        <input type="tel" name="telephone" class="form-control" value="<?php echo $telephone  ?>"><br>
        
        

        <button  style="margin-left: 20%; margin-bottom: 4%;margin-top: 2%; padding:1%; width: 9%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-check"></span> Enregestre</button> 

        <a href="http://127.0.0.1/projet/Gestion-med.php" style="margin-left: 5%; margin-bottom: 4%;margin-top: 2%; padding:1.2%; width: 9%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-circle-arrow-left"></span> Retour  </a>
      </form>
    
</div>





</body>
</html>
