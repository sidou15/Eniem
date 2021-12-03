<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=medcine', 'root', '');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO events 
 (Nom, debut, fin) 
 VALUES (:Nom, :debut, :fin)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':Nom'  => $_POST['title'],
   ':debut' => $_POST['start'],
   ':fin' => $_POST['end']
  )
 );
}


?>