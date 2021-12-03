<?php
$con=mysqli_connect('localhost','root','','medcine');

if (!$con)
{
	die('connectez vous svp'.mysqli_error($con));
}


?>