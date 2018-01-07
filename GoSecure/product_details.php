<?php
 $id=$_GET["id"];
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product.php">Home Security</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="InstProduct.php">Institutional Security</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="AboutUs.html">About Us</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="contactus.html">Contact US</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Support
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="branches.html">Branches</a>
          <a class="dropdown-item" href="form.php">Request Service</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
	


		<div class="jumbotron">
			<div class="container" style="background-color: white;">
				

					<?php
						$con=mysqli_connect("localhost","root","","bhavik");
						$res=mysqli_query($con,"select * from products where pid='$id'");
						while($row=mysqli_fetch_array($res))
						{
							?>
							<div class="row">
							<div class="col" style="margin:3% 0 3% 0;">
						<img src="<?php echo $row['pimage']; ?>" width="300" height="400"> 
					</div>
					<div class="col" style="margin:8% 0 10% 0;">
						<h3><?php echo $row["pname"] ?></h3><br><br>
						<h5><?php echo $row["pinfo"] ?></h5>
					</div>
				</div>
			



							<?php
						}

					?>

					
			</div>
		</div>


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
			<a href="branches.html">Branches</a><br>
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