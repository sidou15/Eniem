<?php
session_start();
if (!isset($_SESSION['user'])) 
  header('location:login.php');
 $user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);


$nom=isset($_GET['submit'])?$_GET['submit']:""; 
if ($nom="nom") {
  $req="SELECT * from events " ;

}


$result=$db->query($req);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Gestion-rdv</title>
</head>
<body style="background-image: url('img/hopital.jpeg');background-size: 100%;background-repeat: no-repeat;">

 <?php include("menu.php");   ?>

<h3 style="color: red ;text-align: center;"> <strong> Liste Des Rendez-Vous </strong></h3>
  
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
      
        <table class="table table-striped table-bordered" style="background-color:#FFDAB9; ">
          <thead  style="background-color:#CD5C5C; color: #FFFFFF; " >
            <tr >
              <th>ID</th> 
              <th>Nom</th>
              <th>Debut de rendez-vous</th>
              <th>Fin de rendez-vous</th>
              

            </tr>
          </thead>
          <tbody>
             <?php while ($medecin= $result->fetch()) {?>

             
              <td> <?php echo $medecin['id'] ?> </td>
              <td > <?php echo $medecin['Nom'] ?> </td>
              <td> <?php echo $medecin['debut'] ?> </td>
              <td> <?php echo $medecin['fin'] ?> </td>
             

           
           


              </tr>

          <?php } ?>
          </tbody>
        </table>
             
      </div>
 
</div>






















<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>

</body>
</html>