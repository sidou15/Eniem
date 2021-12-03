<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=medcine', 'root', '');

$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["titre"],
  'start'   => $row["debut"],
  'end'   => $row["fin"]
 );
}

echo json_encode($data);

?>