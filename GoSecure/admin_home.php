
<?php
	$con=mysqli_connect("localhost","root","","bhavik");

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
	
		.bottom-left
		{
			position:absolute;
			top: 10%;
			left: 10%;
			color:white;
		}
	.footermain
	{
		background-color:#e1e0e0;
		
		
	}
	a{
		color:black;
		
	}
	a:hover
	{
		text-decoration:none;
		color:#3498db;
	}
	.footer{
		text-align:center;
		clear:both;
		color:white;
		background-color:black;
		padding:0.5%;
	}
	
	 #bot
	{
		
		color: white;
	}
	.jumbotron
	{
		position: relative;
		margin-bottom: 0;
	}
	
	.row > .col,.col-lg-4,.col-md-6,.col-sm-12
	{
		
		margin:2% 0% 3% 0%;

	}
	.card > .card-body > a
	{
		display: block;
		position: absolute;
		bottom: 4%;
	}
	td
	{
		padding: 10px;
	}
	</style>
  </head>
  <body>

    <nav class="navbar navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><font face="Lucida Handwriting"> GoSecure </font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      	<a href="showRequest.php" class="nav-link">Service Requests</a>
      </li>
    </ul>
  </div>
</nav>
		
		<div class="jumbotron">

			<div class="container" align="center">
				<form action="" method="post" enctype="multipart/form-data">
				<table>
					<tr>
				<td>Product Name</td><td><input type="text" name="pnm" placeholder="Product Name"></td>
				<tr><td>Category</td>
					<td>
				<select name="pcat">
					<option value="Home">Home Security</option>
					<option value="Ins">Institutional Security</option>
				</select>
			</td>
			</tr>

				<tr>

				<td>Product Deatails</td><td><textarea rows="3" cols="25" name="pinfo">
					
				</textarea></td>
			</tr>
			<tr><td>
				Product Image</td>
				<td><input type="file" name="pimage"></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				<input type="submit" name="submit" class="btn btn-lg btn-dark" value="Add Product">
			</td>
		</tr>
			</table>
				</form>
			</div>



		</div>		

		<?php

		if(isset($_POST["submit"]))
		{
			$file_name=$_FILES['pimage']['name'];
			$dst="image/".$file_name;
			$fnm=$_FILES['pimage']['tmp_name'];
			move_uploaded_file($fnm, $dst);
			$pname=$_POST['pnm'];
			$pcat=$_POST['pcat'];
			$pinfo=$_POST['pinfo'];
			mysqli_query($con,"insert into products values('','$pname','$pcat','$pinfo','$dst')");


		?>

		<script type="text/javascript">
			alert("Product Added Succesfully...!");
		</script>

		<?php

		}
		
		?>


		<div class="jumbotron">
		
			<br>
			<div class=row>
			<div class=col>
			</div>
			<div class=col>
			<a href="index.php"><strong>Home</strong></a><br>
			<a href="product.php">Home Security<br></a>
			<a href="InstProduct.php">Institutional Security</a><br>
			<a href="AboutUs.html">AboutUs</a><br>
			<a href="contactus.html">ContactUs</a>
			</div>
			<div class=col>
			<a href=><strong>Support</strong></a><br>
			<a href="branches.html">Branches</a>
			<a href="form.php">Request Service</a>
			</div>
				<div class=col>
			</div>
		</div>
</div>
<div id="bot" class="navbar-dark bg-dark">
		<center>Copyright &copy; GO SECURE</center>
	</div>


</body>
</html>