<?PHP
session_start();
if (!isset($_SESSION['user'])) 
  header('location:login.php');
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);
//echo $_SESSION['user']['Nom']." ".$_SESSION['user']['Prenom'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mon profil</title>
	<meta charset="utf-8">
<link  rel="icon" type="img/icon" href="img/logo.jfif">
	<!-- Font Awesome -->

	 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <style>
 .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }

    form{
      background-color: transparent;
    }
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
#bar2{
    background-color: #00FFFF;
  }
  #bar2:hover{
    background-color: #191970;
    color: white;
  }

  #bar3{
    background-color: #00FFFF;
  }
  #bar3:hover{
    background-color: #191970;
    color: white;
  }


  #bar4{
    background-color: #00FFFF;
  }

  #bar4:hover{
    background-color: #191970;
    color: white;
  }
#liste{
    background-color: #FFE4B5;
  }
  #liste:hover{
    background-color: blue;
  }
  #nim{
    margin-right: 20%;
    margin-left: 20%;
    margin-top: 2%;
    border-radius: 50%;
    
  }


</style>
  
</head>

<body> 
  <?php  include("menu.php") ?>


<div class="container-fluid bg-1 text-center">
   <h3 href="" style="color: red;"> <strong>ENI-</strong>
    <strong style="color: blue;">EM</strong></h3>
  <img src="img/bloc.jpg" class="img-responsive img-circle margin"   style="display:inline" alt="Bird" width="500" height="400">
  <h3>Bienvenue sur notre site</h3>
</div>


<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Qu'est-ce qu'on fais dans une entreprise ?</h3>
  
 

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Quelle sont les taches d'un médecins </h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="img/enquete.png" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="img/bck.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <img src="img/infermiere.jpg" class="img-responsive margin" style="width:100%" alt="Image">
    </div>
  </div>
</div>



<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p> service médecine <a href="https://www.eniem.dz">www.eniem.com</a></p> 
</footer>


















 <!-- 
<div class="container mt-3">
  <h2>Flambée de maladie à coronavirus 2019 (COVID-19)</h2>
  <p>To right-align the media image, add the image after the .media-body container:</p>
  <div class="media border p-3">
    <div class="media-body">
      <h4>John Doe <small><i>Poster en février 19, 2020</i></small></h4>
      <p>L'OMS travaille en étroite collaboration avec les experts mondiaux, les gouvernements et les partenaires pour élargir rapidement les connaissances scientifiques sur ce nouveau virus, suivre sa propagation et sa virulence, et donner des conseils aux pays et aux individus sur les mesures à prendre pour protéger leur santé et empêcher la propagation de cette flambée.

 .</p>      
    </div>
    <img src="img/ins.jpg" alt="John Doe" class="ml-3 mt-3 rounded-circle" style="width:60px;">
  </div>
</div>





<a type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Changer mot de passe
</a>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

       Modal Header 
     <form method="post" action=".php" class="form">
        
        <label>Mot de passe actual</label><br>
                <input type="password" name="password" class="form-control"><br>

        <label>Neveau mot de passe</label><br>
        <input type="password" name="password" class="form-control"><br>

        <label>Confirmer le mot de passe</label><br>
        <input type="password" name="password" class="form-control"><br>
        
        
        
        

        <button  style="margin-left: 20%; margin-bottom: 4%;margin-top: 2%; padding:1%; width: 19%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-check"></span> Enregestre</button> 

        <a href="http://127.0.0.1/projet/page-admin.php"  style="margin-left: 5%; margin-bottom: 4%;margin-top: 2%; padding:1.2%; width:19%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-circle-arrow-left"></span> Retour</a>
      </form>

     </div>
   </div>
 </div>


<br><br>


<div class="container">
  
      <div class="panel panel-primary" >

        <div class="panel-heading">
          <h3 class="panel-title"> Changer mot de passe </h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
          <form method="post" action=".php" class="">
        
        <label>Mot de passe actual</label><br>
        <input type="password" name="password" class="form-control"><br>

        <label>Neveau mot de passe</label><br>
        <input type="password" name="password" class="form-control"><br>

        <label>Confirmer le mot de passe</label><br>
        <input type="password" name="password" class="form-control"><br>
        
        
        
        

        <button  style="margin-left: 20%; margin-bottom: 4%;margin-top: 2%; padding:1%; width: 19%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-check"></span> Enregestre</button> 

        <a href="http://127.0.0.1/projet/page-admin.php"  style="margin-left: 5%; margin-bottom: 4%;margin-top: 2%; padding:1.2%; width:19%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-circle-arrow-left"></span> Retour</a>
      </form>

        </div>
      </div>
    </div>




<br>

<div class="container">
  
      <div class="panel panel-primary" >

        <div class="panel-heading">
          <h3 class="panel-title">Modifier les coordonnées </h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
      
      <form method="post" action=".php" class="form">
        <label>Nom</label><br>
         <input type="text" name="nom" class="form-control"><br>
         <label>prenom</label><br>
        <input type="text" name="prenom" class="form-control"><br>
        <label>email</label><br>
        <input type="text" name="email" class="form-control"><br>
        <label>password</label><br>
        <input type="password" name="password" class="form-control"><br>
        <label>téléphone</label><br>
        <input type="tel" name="telephone" class="form-control"><br>
        <label>  Date de naissance </label> <input type="Date" name="naissance" placeholder="JJ/MM/YYYY" required="">
        
        

        <button  style="margin-left: 20%; margin-bottom: 4%;margin-top: 2%; padding:1%; width: 9%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-check"></span> Enregestre</button> 

        <a href="http://127.0.0.1/projet/page-admin.php"  style="margin-left: 5%; margin-bottom: 4%;margin-top: 2%; padding:1.2%; width: 9%;"  type="submit" name="submit" class="btn btn-success"><span  class="glyphicon glyphicon-circle-arrow-left"></span> Retour</a>

</div>
</div> 
</form>

</div>
</div>


-->




<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
</body>
</html>
