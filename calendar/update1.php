<?php

//update.php

$connect = new PDO('mysql:host=localhost;dbname=medcine', 'root', '');

if(isset($_POST["id"]))
{
 $query = "
 UPDATE events 
 SET titre=:titre, debut=:debut, fin=:fin 
 WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':titre'  => $_POST['title'],
   ':debut' => $_POST['start'],
   ':fin' => $_POST['end'],
   ':id'   => $_POST['id']
  )
 );
}

?>