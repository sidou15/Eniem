<?php
session_start();
if (!isset($_SESSION['user'])) 
  header('location:login.php');
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);
?>

<!DOCTYPE html>
<html>
<head>
	<title>accueil</title>
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
  body{background-color: #1E90FF ;
    color:white; }
  label{
    color: white;
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

 
  header{
    background-color: #1E90FF;
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
  #cnct{
    background-color: #1E90FF; 
    padding: 7%;
    padding-right: 30%;
    padding-left: 30%; 
     margin-right: 99px;
     color: white;
     border-radius: 20%;
  }
  #cnct:hover{
background-color:  #191970;
color: green;

  }

	#contener img{
		max-height: 350px;
		max-width: 1000px;
		justify-content: center;
		margin-left: 10%;
	}
   .card{
   	width: 80%;
   	margin-left: 60px;
   	margin-top: 20px;
   	padding: 0px;
   }	
   #btn{
    border-radius: 15%;
    
   }
   #btn:hover{
    color: #000000;
  
   }
   
</style>
</head>
<body>


<strong><h1 style=" color:black ; text-transform: uppercase; justify-content: center; display: flex;">Entreprise Nationale d'​Industrie et de l'Electroménager</h1></strong>


 <?php include 'menu.php'; ?>



<div id="nim">
<div  id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/medecin.jpg" height="300"
        alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/nt.jpg" height="300"
        alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bloc.jpg" height="300" 
        alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>





  
  <article  style="margin-left: 2%;text-align: center;">
    <h1>Adresse</h1>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3199.0351705920066!2d4.1400975975798495!3d36.69769273369431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128db74f9f814975%3A0xba22c5d1e21a1308!2sENIEM%2C%20Tizi%20Rached!5e0!3m2!1sfr!2sdz!4v1626094473250!5m2!1sfr!2sdz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </article>

	
<article style="justify-content: center; margin-left: 20%;margin-right: 20%;">
<section class="mb-4">



    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contacte nous</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Avez-vous des questions? N'hésitez pas à nous contacter directement. Notre équipe reviendra vers vous en quelques heures pour vous aider.</p>

    <div  class="row" style="background-color: #000000;">



        <!--Grid column-->
        <div  class="col-md-9 mb-md-0 mb-5">
            <form  id="contact-form" name="contact-form" action="contact.php" method="POST">

                <!--Grid row-->
                <div  class="row">

                    <!--Grid column-->
                    <div  class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class=""> Nom</label>
                        </div>
                    </div>
             
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class=""> E-mail</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Sujet</label>
                        </div>
                    </div>
                </div>
            
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text"  name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label id="message" for="message"> message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

          

            <button  style="margin-left: 5%; margin-bottom: 4%;margin-top: 2%; padding:1%; width: 25%;"  type="submit" name="submit"  class="btn btn-success"><span  class="glyphicon glyphicon-log-in"></span> envoyé</button> 
          </form>

            <div class="status"></div>
        </div>


        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p> Zone industrielle Aissat Idir. Oued Aissi
</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p> 026 20 04 64</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>dj.mouazer@eniem.dz</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
	
	

</main>
</article>






































<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

  <!-- Footer Elements -->
  <div class="container">

    <!--Grid row-->
    <div class="row">

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <!-- Form -->
        <form class="form-inline">
          <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
            aria-label="Search">
          <i class="fas fa-search" aria-hidden="true"></i>
        </form>
        <!-- Form -->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-6 mb-4">

        <form class="input-group">
          <input type="text" class="form-control form-control-sm" placeholder="Your email"
            aria-label="Your email" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
          </div>
        </form>

      </div>
      <!--Grid column-->

    </div>
    <!--Grid row-->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="https://mdbootstrap.com/"> ENIEM.DZ</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
</body>
</html>