<?php 
session_start();
if (!isset($_SESSION['user'])) 
  header('location:login.php');
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);


$nom=isset($_GET['submit'])?$_GET['submit']:""; 
if ($nom="nom") {
  $req="SELECT * from users  " ;

}


$result=$db->query($req);

?>

<?php
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);


$login=isset($_GET['login'])?$_GET['login']:"";
$req="SELECT * from users where Nom like '%$login%'";
$reqcount="SELECT count(*) countuser from user";


$result=$db->query($req);
$resulcount=$db->query($reqcount);

$tbcount=$resulcount->fetch();
$nbuser=$tbcount['countuser'];  
?>





<!DOCTYPE html> 
<html >
<head>
  <title>Gestion des médecins </title>
  <meta charset="utf-8">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link  rel="icon" type="img/icon" href="img/logo.jfif">
<!------ Include the above in your HEAD tag ---------->
<style >
  body{

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
body{
  background-image: url('img/hopital.jpeg');
  background-size: 100%;
  background-repeat: no-repeat;
}

</style>
  
</head>


<body>

<?php include("menu.php");   ?>
 




<div class="container" >
  
      <div class="panel panel-success" style="background-color:transparent;">
        <div class="panel-heading">
          
          <h3 class="panel-title">Recherche Médecins ...</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
        <br>
        <form method="get" action="Gestion-med.php" class="form-inline">
        	<div class="form-group">
        	<input style="margin-left: 6%; " type="text" name="login" placeholder="chercher un medecin" class="form-control" value="<?php $nom ?>"></div>
        	<button style="margin-left: 3%;" type="submit" name="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> Recherche</button> 

&nbsp &nbsp
        	      <?php if ($_SESSION['user']['Role']=='admin') {?>
          <a href="nv-medecin.php"><span class="glyphicon glyphicon-plus" ></span> Ajouter un médecin</a>
        <?php }?>
        </form>
        <br>
      </div>

<div class="container">
  
      <div class="panel panel-primary " style="background-color:transparent;" >

        <div class="panel-heading">
          <h3 class="panel-title">Liste Des Médecins </h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
      
        <table class="table table-striped table-bordered">
        	<thead >
        		<tr style="color: blue;" >
        			<th>ID</th> 
        			<th>Nom</th>
        			<th>Prenom</th>
              <th>Email</th>
              <th>Téléphone</th>

              <?php if ($_SESSION['user']['Role']=='admin') {?>
        			<th>Action</th>
              <?php }?>
        		</tr>
        	</thead>
        	<tbody>
        		 <?php while ($medecin= $result->fetch()) {?>

        		 	<tr class="<?php echo $medecin['etat']==1?'success':'danger' ?>" > 
        			<td> <?php echo $medecin['id'] ?> </td>
        			<td > <?php echo $medecin['Nom'] ?> </td>
        			<td> <?php echo $medecin['Prenom'] ?> </td>
              <td> <?php echo $medecin['Email'] ?> </td>
              <td> <?php echo $medecin['telephone'] ?> </td>



              <?php if ($_SESSION['user']['Role']=='admin') {?>
           

              <td><a href="edit-med.php?id=<?php echo $medecin['id'] ?>" style="color: green;" > <span class="glyphicon glyphicon-edit"></span> </a>
                &nbsp &nbsp
               <a onclick="return confirm('Etes vous sur de vouloir supprimer un médecin?')"href="sup-med.php?id=<?php echo $medecin['id'] ?> </td>" style="color: red;"> 
          <span class="glyphicon glyphicon-trash"></span>
     </a> 
&nbsp &nbsp

                 <a href="activermed.php?id=<?php echo $medecin['id'] ?>&etat=<?php echo $medecin['etat']?> " >
               
                    <?php 
                       if ($medecin['etat']==1)
                          echo "<span style='color: #778899;' class='glyphicon glyphicon-remove'></span>";
                       else
                          echo "<span class='glyphicon glyphicon-ok'></span>";
                    ?>
              </a> 


              </td>

 
              </tr>

          <?php } ?>
        	</tbody>
          <?php } ?>
        </table>
        
      </div>
 
</div>
</div> 

























  
</body>
</html>