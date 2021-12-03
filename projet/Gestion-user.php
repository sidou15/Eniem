<?php 
session_start();
if (!isset($_SESSION['user'])) 
  header('location:login.php');
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);


$nom=isset($_GET['submit'])?$_GET['submit']:""; 
if ($nom="nom") {
  $req="SELECT * from  user " ;
}
$result=$db->query($req);
?>





<?php


$login=isset($_GET['login'])?$_GET['login']:"";
$req="SELECT * from user where Nom like '%$login%'";
$reqcount="SELECT count(*) countuser from user";


$result=$db->query($req);
$resulcount=$db->query($reqcount);

$tbcount=$resulcount->fetch();
$nbuser=$tbcount['countuser'];  
?>




<!DOCTYPE html> 
<html >
<head>
  <title>Gstion des patients  </title>
  <meta charset="utf-8">

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style >
  body{
    background-image: url('img/hopital.jpeg');
    background-repeat: no-repeat;
    background-size: 100%;
  }

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
  
      <div class="panel panel-success" style="background-color: transparent;" >
        <div class="panel-heading">
          
          <h3 class="panel-title">Recherche Utilisateur ...</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
        <br>
        <form method="get" action="Gestion-user.php" class="form-inline">
        	<div class="form-group">
        	<input style="margin-left: 6%; " type="text" name="login" placeholder="chercher le nom d'un utilisateur " class="form-control" value="<?php $login ?>"></div>
        	<button style="margin-left: 3%;" type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> Recherche</button>  &nbsp &nbsp

          <?php if ($_SESSION['user']['Role']=='admin') {?>
        	<a href="nv-user.php"><span class="glyphicon glyphicon-plus" ></span> Ajouter un Méd</a>
        <?php }?>
        </form>
        <br>
      </div>



<div class="container">
  
      <div class="panel panel-primary" style="background-color: transparent;" >

        <div class="panel-heading">
          <h3 class="panel-title">Liste des Patients</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
      
        <table class="table table-striped table-bordered">
        	<thead>
        		<tr>
        			<th>ID</th> 
        			<th>Nom</th>
        			<th>Prenom</th>
              <th>Email</th>
               <?php if ($_SESSION['user']['Role']=='admin') {?>
              <th>role</th> 
        			<th>Action</th>
              <?php }?>
        		</tr>
        	</thead>
        	<tbody>
        		 <?php while ($patient= $result->fetch()) {?>

        		 	<tr class="<?php echo $patient['etat']==1?'success':'danger' ?>">
        			<td> <?php echo $patient['ID'] ?> </td>
        			<td> <?php echo $patient['Nom'] ?> </td>
        			<td> <?php echo $patient['Prenom'] ?> </td>
              <td> <?php echo $patient['Email'] ?> </td>

       <?php if ($_SESSION['user']['Role']=='admin') {?>
               <td> <?php echo $patient['Role'] ?> </td>

               
          <td><a href="edit-user.php?id=<?php echo $patient['ID'] ?> "> <span class="glyphicon glyphicon-edit"></span></a>
                &nbsp &nbsp
      <a onclick="return confirm('Etes vous sur de vouloir supprimer un utilisateurs')"href="sup-user.php?id=<?php echo $patient['ID'] ?> </td>"> 
                <span class="glyphicon glyphicon-trash"></span>
     </a> 
&nbsp &nbsp

                 <a href="activeruser.php?id=<?php echo $patient['ID'] ?>&etat=<?php echo $patient['etat']?> ">
               

                    <?php 
                       if ($patient['etat']==1)
                          echo "<span class='glyphicon glyphicon-remove'></span>";
                       else
                          echo "<span class='glyphicon glyphicon-ok'></span>";
                    ?>
              </a>



              </td>

 
              </tr>
	
        	<?php	} ?> 
        	</tbody>
        <?php }?>
        </table>
      </div>

</div>
</div> 
  


  
</body>
</html>