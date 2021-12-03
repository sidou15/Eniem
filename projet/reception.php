<?php

session_start();
if (!isset($_SESSION['user'])) 
  header('location:login.php');
 $user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);


$nom=isset($_GET['submit'])?$_GET['submit']:""; 
if ($nom="nom") {
  $req="SELECT * from contact " ;

}


$result=$db->query($req);

?>
<!DOCTYPE html>
<html>
<head>
  <title>Liste Des Contacte</title>
  <meta charset="utf-8">
  <link  rel="icon" type="img/icon" href="img/logo.jfif">
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body style="background-image:url('img/cnt.jpg'); background-repeat: no-repeat; background-size:120%;">

 <?php include("menu.php");   ?>


<h3 style="color: #FF0000 ;text-align: center;"> <strong> Boite de réception </strong> </h3>
 <?php if ($_SESSION['user']['Role']=='admin') {?>

  <div class="container">
  
      <div class="panel panel-primary panel-succes "  >
  
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
      
        <table class="table table-striped table-bordered" style="background-color:#F5F5DC; ">
          <thead >
            <tr style="background-color: green; color: #FFFFFF" >
              <th>ID</th> 
              <th>Nom</th>
              <th>Email</th>
              <th>subject</th>
              <th>message</th>
              <th>action</th>

            </tr>
          </thead>
          <tbody>
             <?php while ($medecin= $result->fetch()) {?>

             
              <td> <?php echo $medecin['id'] ?> </td>
              <td > <?php echo $medecin['Nom'] ?> </td>
              <td> <?php echo $medecin['Email'] ?> </td>
              <td> <?php echo $medecin['subject'] ?> </td>
              <td> <?php echo $medecin['message'] ?> </td>

            <td>  
           <a onclick="return confirm('Etes vous sur de vouloir supprimer un message?')"href="sup-contacte.php?id=<?php echo $medecin['id'] ?> </td>" style="color: red;"> 
          <span class="glyphicon glyphicon-trash"></span> </a> 
        </td>
           


              </tr>

          <?php } ?>
          </tbody>
        </table>
            <?php } ?>
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