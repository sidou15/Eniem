<?php
$user="root";
$pss="";
$db= new PDO("mysql:host=localhost;dbname=medcine;",$user,$pss);



if (isset($_POST['submit'])) {
    $nom=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];

    if ($nom and $email and $subject and $message) {

        $connect=mysql_connect('localhost','root','') or die('error') ;
        mysql_select_db('medcine');
        $query=mysql_query("INSERT INTO contact values ('' ,'$nom','$email','$subject','$message')");
       header('location:http://127.0.0.1/projet/home.php');
    }
}

?>