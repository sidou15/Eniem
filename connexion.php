

<!DOCTYPE html>
<html>
<head>
	<title>connexion</title>
	<meta charset="utf-8">
	<link  rel="icon" type="img/icon" href="img/logo.jfif">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style >
body{
  background-image: url('img/bck.jpg');
  background-size:100%;
  background-repeat: no-repeat;

}
	.panel-primary{
		width: 50%;
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

        	  
&nbsp &nbsp
        	
      </div>

<div class="container">
  
      <div class="panel panel-primary" >

        <div class="panel-heading">
          <h3 class="panel-title">Connexion </h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
     
       <?php
        if(@$_GET['empty']==true) {
          
         ?>
         <div class="alert-light text-danger"><?php echo @$_GET['empty'] ?></div>
         <?php
     }
         ?>



          <?php
        if(@$_GET['Invalid']==true) {
          
         ?>
         <div class="alert-light text-danger"><?php echo @$_GET['Invalid'] ?></div>
         <?php
     }
         ?>
       
       <br>
  
         <form method="post" action="authentication.php">
        <table class="table table-striped table-bordered">
        	<label>Email</label> <input type="email" name="email" placeholder="saisir votre email"><br>
        	<label>Password</label> <input type="password" name="password" placeholder="saisir votre password"><br>

             <button  style="margin-left: 5%; margin-bottom: 4%;margin-top: 2%; padding:1%; width: 25%;"  type="submit" name="login" class="btn btn-success"><span  class="glyphicon glyphicon-login"></span> connexion</button> 

             &nbsp &nbsp &nbsp &nbsp
             Vous n'étés pas inscrir ?  <a href="http://127.0.0.1/projet/inscrir.php"> inscriez vous </a> <br>

        </table>
        </form>
      </div>

</div>
</div> 
  



</body>
</html>