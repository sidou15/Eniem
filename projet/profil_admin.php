<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php include("menu.php");   ?>

<div class="container">
  
       <div class="panel panel-primary" >

        <div class="panel-heading">
          <h3 class="panel-title">Edition d'un médecin</h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
       

      <form method="post" action="" class="form"  >

     <label for="niveau" >id <?php echo $idm; ?> </label>
     <input type="hidden" name="idm" class="form-control" value="<?php echo $idm ?>">


      	<label>Nom</label><br>
      	 <input type="text" name="nom" class="form-control" value="<?php echo $nom  ?>"><br>
      	 <label>prenom</label><br>
      	<input type="text" name="prenom" class="form-control" value="<?php echo $prenom  ?>" ><br>
      	<label>email</label><br>
      	<input type="text" name="email" class="form-control" value="<?php echo $email  ?>"><br>
      	<label>password</label><br>
        <input type="password" name="password" class="form-control" value="<?php echo $password  ?>"><br>
        <label>téléphone</label><br>
        <input type="tel" name="telephone" class="form-control" value="<?php echo $telephone  ?>"><br>
        
      	

      	<button  style="margin-left: 20%; margin-bottom: 4%;margin-top: 2%; padding:1%; width: 9%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-check"></span> Enregestre</button> 

        <button  style="margin-left: 5%; margin-bottom: 4%;margin-top: 2%; padding:1.2%; width: 9%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-circle-arrow-left"></span> Retour</button>  
      </form>
    
</div>



</body>
</html>