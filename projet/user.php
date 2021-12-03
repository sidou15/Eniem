<?php 
session_start();
if (!isset($_SESSION['user'])) 
  header('location:login.php');
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);

 

  $req="SELECT * from user";
$result=$db->query($req);






?>



<!DOCTYPE html>
<html lang="en">
<head>
  <title>Gestion des utilisateurs </title>
  <meta charset="utf-8">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style >
  
  .row{
    margin-top:40px;
    padding: 0 10px;
}

.clickable{
    cursor: pointer;   
}

.panel-heading span {
  margin-top: -20px;
  font-size: 15px;
}
</style>
  
</head>
<body>
  


<?php include("menu.php");   ?>
 




<div class="container">
  
      <div class="panel panel-success" >
        <div class="panel-heading">
          
          <h3 class="panel-title">recherche user ...</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
        <br>
        <form method="get" action="user.php" class="form-inline">
          <div class="form-group">
          <input style="margin-left: 6%; " type="text" name="nom" placeholder="chercher un utilisateur" class="form-control"></div>
          <button style="margin-left: 3%;" type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> Recherche</button>  

&nbsp &nbsp
          
          <a href="nv-user.php"><span class="glyphicon glyphicon-plus" ></span> ajouter un utilisateur</a>

        </form>
        <br>
      </div>

<div class="container">
  
      <div class="panel panel-primary" >

        <div class="panel-heading">
          <h3 class="panel-title">liste des utilisateurs</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
      
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>ID</th> 
              <th>nom</th>
              <th>prenom</th>
              <th>Email</th>
              <th>Télephone</th>
              
              <th>action</th>
            
            </tr>
          </thead>
          <tbody>
             <?php while ($medecin= $result->fetch()) {?>

              <tr>
              <td> <?php echo $medecin['ID'] ?> </td>
              <td> <?php echo $medecin['Nom'] ?> </td>
              <td><?php echo $medecin['Prenom']?> </td>
              <td> <?php echo $medecin['Email'] ?> </td>
              <td> <?php echo $medecin['telephone'] ?> </td>


              <td>
            <a href="editer.php"> <span class="glyphicon glyphicon-pencil" ></span> </a>
            &nbsp &nbsp
         <a onclick="return confirm('Etes vous sur de vouloir supprimer un user?')"href="sup-user.php?id=<?php echo $medecin['ID'] ?> </td>"> 
                <span class="glyphicon glyphicon-trash"></span>
  
             </tr>
          <?php } ?> 
          </tbody>
        </table>
      </div>

</div>
</div> 
  


  
</body>
</html>

