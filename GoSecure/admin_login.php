<?php

  	$con=mysqli_connect("localhost","root","","bhavik")


  	?>



<!doctype html>
<html lang="en">
  <head>
    <title>GoSecure</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" ></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" >
	
	<style>
	.header
	{
		color:white;
		text-align: center;
	}
		
	</style>
  </head>
  <body>
  	<div class="header navbar-dark bg-dark">
  		<h1><font face="Lucida Handwriting"> GoSecure </font> Admin Panel</h1>

  	</div>


  	<div class="container-fluid">
  		
  		<div class="jumbotron" >
  			<center><h3>ADMIN LOGIN</h3>
  				<hr>
  			<div class="container">
  				<form action="" method="post">
  				<input type="text" name="username" placeholder="username" class="form-control col-md-3"><br>
  				<input type="password" name="pass" placeholder="password" class="form-control col-md-3"><br>
  				<input type="submit" name="submit" value="Login" class="btn btn-lg btn-outline-dark col-md-3">
  				</form>
  			</div>
  			</center>
  		</div>
  	</div>


  	<?php
  	if(isset($_POST["submit"]))
  	{
  		$res=mysqli_query($con,"select * from admin_login where name='$_POST[username]' AND pass='$_POST[pass]'");
  		
  		while($row=mysqli_fetch_array($res))
  		{

	?>

	<script type="text/javascript">
		window.location="admin_home.php";
	</script>

  	<?php
  		}
  	}
	?>














<div id="bot" class="navbar-dark bg-dark">
		<center>Copyright &copy; GO SECURE</center>
	</div>


</body>
</html>