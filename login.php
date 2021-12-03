<?php

session_start();
if (isset($_SESSION['erreurlogin'])) 
	$erreurlogin=$_SESSION['erreurlogin'];
else{
	$erreurlogin="";
    }
  session_destroy();
  $ss= "SELECT * from user inner join"
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
		<meta charset="utf-8">
	<link  rel="icon" type="img/icon" href="">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style >
body{
  background-image: url('img/medcin.jpg');
  background-size:100%;
  background-repeat: no-repeat;
}
.panel-primary{

		margin: 10%;
		margin-left: 25%; 
    background-color: transparent;

	}
input[type=password]{
width: 80%;  
    padding: 10px 5px ;
   border-radius: 15px;
   box-shadow: 4px 4px 6px white;
   margin-top: 2%;
   margin-left:10%;
   margin-bottom: 5%;

}
input[type=email]{
width: 80%;  
    padding: 10px 5px ;
    margin-left: 10%;
   border-radius: 15px;
   box-shadow: 4px 4px 6px white;
   margin-top: 2%;
}
label{
	margin-left:10%;
	margin-top: 2%;
}
</style>
</head>
<body>
	<div class="container">
  
      <div class="panel panel-primary" >

        <div class="panel-heading">
          <h3 class="panel-title">Connexion </h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
        <?php if (!empty($erreurlogin)) {?>
        <div class="alert alert-danger">
       <?php echo $erreurlogin ?>
    </div>
    <?php } ?>

 <form method="post" action="secnct.php">
 	
 		
        <table class="table table-striped table-bordered">
        	<label>Email</label> <input type="email" name="email" placeholder="saisir votre email"><br>
        	<label>Password</label> <input type="password" name="password" placeholder="saisir votre password"><br>

             <button  style="margin-left: 5%; margin-bottom: 4%;margin-top: 2%; padding:1%; width: 25%;"  type="submit" name="login" class="btn btn-success"><span  class="glyphicon glyphicon-log-in"></span> connexion</button> 

             &nbsp &nbsp &nbsp &nbsp
             Vous n'étés pas inscrir ?  <a href="http://127.0.0.1/projet/inscrir.php"> Crée un compte </a> <br>

        </table>
        </form>

    </div>
</div>


</body>
</html>