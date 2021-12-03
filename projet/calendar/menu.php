<!DOCTYPE html>
<html lang="en">
<head>
  <title>menu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://127.0.0.1/projet/home.php">acceuil</a>
    </div>

    <ul class="nav navbar-nav">
      <!--
      <li ><a  href="http://127.0.0.1/projet/Gestion-med.php">Liste des medecins</a>
      </li>
    -->
     <?php if ($_SESSION['user']['Role']=='admin') {?>
      <li><a href="http://127.0.0.1/projet/Gestion-user.php">Gestion Des Utilisateurs </a></li>

      
       <li><a href="http://127.0.0.1/projet/reception.php">Liste Des Contactes </a></li>
        <?php }?>
   <?php if ($_SESSION['user']['Role']=='patient') {?>
     <li ><a  href="http://127.0.0.1/projet/calendar/index.php"> Prendre un rendez-vous</a>
      </li>
       
       <li ><a  href="http://127.0.0.1/projet/">Annuler un rendez-vous  </a>
      </li>
       <?php }?>
      <?php if ($_SESSION['user']['Role']=='medecin') {?>
      <li ><a  href="http://127.0.0.1/projet/Gestion-med.php">Gérer mes desponibilite</a>
      </li>
      <li ><a  href="http://127.0.0.1/projet/Gestion-med.php"> Gérerles rendez vous </a>
      </li>
    <?php }?>
       </ul>

   <ul class="nav navbar-nav navbar-right">
   
      <li><a href="page-admin.php" class="glyphicon glyphicon-user"> <?php echo $_SESSION['user']['Nom'] ?></a></li>
      
       <li><a href="changementpwd.php?id=<?php echo $_SESSION['user']['ID'] ?>"><span class="glyphicon glyphicon-cog"></span> Paramétres</a></li>

      <li><a href="dcnct.php"><span class="glyphicon glyphicon-log-in"></span> Déconnexion</a></li>

    </ul>

  </div>

</nav>

</body>
</html>
























