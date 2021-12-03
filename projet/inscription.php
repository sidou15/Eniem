<!DOCTYPE html>
<html>
<head>
	<title>Inscription</title>
	<meta charset="utf-8">
    
	<link  rel="icon" type="img/icon" href="img/logo.jfif">
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
<style>
	body{
		background-color: #F8F8FF;
        background-image: url('img/enquete.png');
        background-repeat: no-repeat;
        background-size: cover;
	}
	form{
    
    color: #fff;
    text-shadow: 1px 1px 20px red;
    width: 50%;
    border: 1px solid black;
    display: inline-block;
    padding: 4%;
    margin: 25%;
    margin-top: 1%;
    border-radius: 5%;
    box-shadow: 9px 9px 30px black;
    background: rgb(0,0,0,.3);

            border:none;
            outline: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
}
	
input[type=text],[type=password],[type=tel] {
    width: 99%;
    padding: 10px 5px ;
    margin: 10px 0px 10px 10px;
   border-radius: 15px;
   box-shadow: 4px 4px 6px white;
   border:none;
   outline: none;
   border-bottom: 2px solid blue;
   background: transparent;


}
#cnct{
		margin-left: 50%;
	}



 button{
width: 40%;
    margin-right: -2%;
    margin-top: 3%;
    margin-bottom: 3%;
    margin-left: 4%;
    padding: 5px;
    border-radius: 25px;
    color: white;
    background-color: #008B8B;

}


button:hover{
	background-color:#00BFFF ;
}
input[type=submit]{             
    width: 20%;
    margin-right: -2%;
    margin-top: 3%;
    margin-bottom: 3%;
    margin-left: 4%;
    padding: 2%;
    border-radius: 20px;
    color: white;
    background-color: green;
}
	
</style>
</head>
<body>

    <?php
    if (isset($_POST['submit'])) {
        $nom=($_POST['Nom']);
        $pre=($_POST['Prenom']);
        $Email= ($_POST['Email']);
        $pwd=($_POST['password']);
        $brth=($_POST['naissance']);
        $tel=($_POST['Telephone']);

    if ($nom and $pre and $Email and $pwd and $brth and $tel ) {

        $connect=mysql_connect('localhost','root','') or die('error') ;
        mysql_select_db('medcine');
        $query=mysql_query("INSERT INTO  user values('' ,'$nom','$pre','$Email','$pwd' ,'$brth','$tel') ");
    die(" <div class='alert alert-success' role='alert'> <h3> Félicitaion vous étes désormais inscrit(e) sur le site <a href='connecter.php'> connecter vous</a> </h3> </div");  
    }
    }



     ?>

<h1 style="text-align: center; margin-top: 1%; color: blue;  "  ></style>Inscription</h1>
	
	<form method="POST" action="inscription.php">	
	<label>Nom</label>  <input  type="text" name="Nom" style="color: #fff; " placeholder= "votre nom" required="">

<label> Prénom </label><input type="text" name="Prenom" placeholder="votre prénomnom" required="">
	

<label>  E-mail </label> <input type="text" name="Email" placeholder="votre E-mail" required="">

<label>  mot de passe </label><input type="Password" name="password" placeholder="Password" required="">
<label>  Date de naissance </label> <input type="Date" name="naissance" placeholder="JJ/MM/YYYY" required="">

<label> Telephone </label><input type="Tel" name="Telephone" placeholder="XXX-XXX-XXX" required="">
	      <button style="margin-right: 4%; " type="submit" name="submit">S'inscrire</button>

         <p > vous avais déja inscrire ? <a href="http://127.0.0.1/memoire/connecter.php"> Connectez vous</a></p>
	    
</form>





<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
</body>
</html>