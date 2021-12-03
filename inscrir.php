<!DOCTYPE html>
<html>
<head>
	<title>s'inscrir</title>
  <link  rel="icon" type="img/icon" href="img/logo.jfif">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta charset="utf-8">
	<style>
    body{
  background-image: url('img/ins.jpg');
  background-size:100%;
  background-repeat: no-repeat;

}
  .panel-primary{
    width: 50%;
    margin: 10%;
    margin-top: 3%;
    margin-left: 20%;
    background-color: transparent;
  }  
input[type=text] {
    width: 75%;  
    padding: 10px 5px ;
    margin-left: 10%;
   border-radius: 15px;
   box-shadow: 4px 4px 6px white;
}
input[type=password]{
width: 75%;  
    padding: 10px 5px ;
    margin-left: 10%;
   border-radius: 15px;
   box-shadow: 4px 4px 6px white;
}
input[type=date]{
width: 75%;  
    padding: 10px 5px ;
    margin-left: 10%;
   border-radius: 15px;
   box-shadow: 4px 4px 6px white;
}
input[type=tel]{
  width: 75%;  
    padding: 10px 5px ;
    margin-left: 10%;
   border-radius: 15px;
   box-shadow: 4px 4px 6px white;
}


label{
	margin-left: 10%;
}

	</style>
</head>
<body>
 <?php
    if (isset($_POST['submit'])) {
        $nom=($_POST['nom']);
        $pre=($_POST['prenom']);
        $Email= ($_POST['email']);
        $pwd=($_POST['password']);
        $brth=($_POST['date']);
        $tel=($_POST['telephone']);

    if ($nom and $pre and $Email and $pwd and $brth and $tel ) {

        $connect=mysql_connect('localhost','root','') or die('error') ;
        mysql_select_db('medcine');
        $query=mysql_query("INSERT INTO user  values ('' ,'$nom','$pre','$Email','$pwd','$brth','$tel')");
    die(" <div class='alert alert-success' role='alert'> <h3> Félicitaion vous étes désormais inscrit(e) sur le site <a href='login.php'> connecter vous</a> </h3> </div");  
    }
    }
    ?>
<div class="container">
       <div class="panel panel-primary" >
        <div class="panel-heading">
          <h3 class="panel-title">inscription  </h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
      <form method="post" action="inscrir.php" class="form">
        <br>
        <label>Nom</label><br>
         <input type="text" name="nom" class="form-control" placeholder="saisir votre nom"><br>
         <label>Prenom</label><br>
        <input type="text" name="prenom" class="form-control" placeholder="saisir votre prenom"><br>
        <label>Email</label><br>
        <input type="text" name="email" class="form-control" placeholder="saisir votre email"><br>
        <label>Password</label><br>
        <input type="password" name="password" class="form-control" placeholder="saisir votre password"><br>
        <label>Téléphone</label><br>
        <input type="tel" name="telephone" class="form-control"placeholder="XXX-XXX-XXX"><br>
        <label>Date de naissance</label>
        <input type="date" name="date" class="form-control" >
        
        

        <button  style="margin-left: 20%; margin-bottom: 4%;margin-top: 2%; padding:1%; width: 20%;"  type="submit" name="submit" class="btn btn-success"><span  class=""></span> s'inscrir</button> 
&nbsp &nbsp &nbsp &nbsp
        étés vous déja inscrir ? <a href="http://127.0.0.1/projet/login.php">  connectez vous</a> <br> 
      </form>
</div>
</div>


</body>
</html>
