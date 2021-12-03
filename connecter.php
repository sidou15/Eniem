<!DOCTYPE html>
<html>
<head>
	<title>connexion</title>
	<meta charset="utf-8">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>>
	<style >
		
		body{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			background: url('img/bck.jpg');
			background-size: cover;
			 

		}
		.box{
			position:absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%); 
			width: 400px;
			padding: 40px;
			background: rgb(0,0,0,.6);
			box-sizing: border-box;
			box-shadow: 0 15px 25px rgb(0,0,0,.5);
			border-radius: 10px;
		}
		.box h2{
			margin: 0 0 30px;
			padding: 0;
			color: #fff;
		}
		.box .inputBox{
			position: relative;
		}
		.box .inputBox input{
			width: 100%;
			padding: 10px 0;
			font-size: 16px;
			color: #fff;
			letter-spacing: 2px;
			margin-bottom: 30px;
			border:none;
			border-bottom:1px solid #fff;
			outline: none;
			background: transparent;
			
		}
		.box .inputBox label{
			position: absolute;
			top: 0;
			left: 0;
			letter-spacing: 2px;
			padding: 16px;
			color: #fff;
			pointer-events: none;
			transition: .5s;
		}
		.box .inputBox input:focus ~ label,
		.box .inputBox input:valid ~ label{
			top: -25px;
			left: 0;
			color: #0000FF;
			font-size: 12px;
		}
		.box input[type="submit"]{
			background: transparent;
			border:none;
			outline: none;
			color: #fff;
			background: #1E90FF;
			padding: 10px 20px;
			cursor: pointer;
			border-radius: 5px;
		}


	</style>
	
</head>
<body>

	


<div class="box">
		<h2>Connexion</h2>
      <form method="POST">
      	
	<div class="inputBox">
		<div class="glyphicon glyphicon-envelope">
		<input  type="text" name="Email" required=""><label>E-mail</label>
			</div>

			<div class="inputBox" >
				<div class="glyphicon glyphicon-lock">
			 <input  type="password" name="Password" required=""><label>password </label>
			</div>
			</div>
			
				<input  type="submit" name="login" value="Connexion">

<!--
			echo "<div class='color:red;' 'alert  alert-danger' role='alert'> E-mail ou mot de passe inncorrect !!! </div>";
		-->
		</form>
	</div>

</body>
</html>