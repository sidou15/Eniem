<!DOCTYPE html>
<html>
<head>
	<title>contacte</title>
</head>
<body>

	<?php include("menu.php");   ?>


	<div class="container">
  
      <div class="panel panel-primary" >

        <div class="panel-heading">
          <h3 class="panel-title">liste des médecins </h3>
          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
        </div>
      
        <table class="table table-striped table-bordered">
        	<thead >
        		<tr >
        			<th>ID</th> 
        			<th>Nom</th>
        			<th>Prenom</th>
              <th>Email</th>
              <th>Téléphone</th>
        			<th>Action</th>
              
        		</tr>
        	</thead>
        	<tbody>
        		 <?php while ($medecin= $result->fetch()) {?>

        		 	<tr class="<?php echo $medecin['etat']==1?'success':'danger' ?>" > 
        			<td> <?php echo $medecin['id'] ?> </td>
        			<td > <?php echo $medecin['Nom'] ?> </td>
        			<td> <?php echo $medecin['Prenom'] ?> </td>
              <td> <?php echo $medecin['Email'] ?> </td>
              <td> <?php echo $medecin['telephone'] ?> </td>


              <td>
               <a href="edit-med.php?id=<?php echo $medecin['id'] ?>"> <span class="glyphicon glyphicon-edit"></span> </a>

                &nbsp &nbsp
               <a onclick="return confirm('Etes vous sur de vouloir supprimer un médecin?')"href="sup-med.php?id=<?php echo $medecin['id'] ?> </td>"> 
          <span class="glyphicon glyphicon-trash"></span>
     </a> 
&nbsp &nbsp

                 <a href="activermed.php?id=<?php echo $medecin['id'] ?>&etat=<?php echo $medecin['etat']?> ">
               
                    <?php 
                       if ($medecin['etat']==1)
                          echo "<span class='glyphicon glyphicon-remove'></span>";
                       else
                          echo "<span class='glyphicon glyphicon-ok'></span>";
                    ?>
              </a> 

              </td>

              </tr>
  
          <?php } ?>
        	</tbody>
        </table>
      </div>

</div>
</div> 

</body>
</html>