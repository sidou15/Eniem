<?php 
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);

$id=isset($_GET['id'])?$_GET['id']:0;
  
 $req="DELETE FROM  user WHERE ID=?";

$param=array($id);
$result= $db->prepare($req);
$result->execute($param);
header('location:Gestion-user.php');


 ?>
