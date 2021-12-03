<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=medcine', 'root', '');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO events 
 (titre, debut, fin) 
 VALUES (:titre, :debut, :fin)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':titre'  => $_POST['title'],
   ':debut' => $_POST['start'],
   ':fin' => $_POST['end']
  )
 );
}


?>