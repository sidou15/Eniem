<?php
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);


$login=isset($_GET['login'])?$_GET['login']:"";
$req="SELECT * from patients where Nom like '%$login%'";
$reqcount="SELECT count(*) countuser from patients";


$result=$db->query($req);
$resulcount=$db->query($reqcount);

$tbcount=$resulcount->fetch();
$nbuser=$tbcount['countuser'];  
?>