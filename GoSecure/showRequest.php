
<?php
	$con=mysqli_connect("localhost","root","","bhavik");
	$result=mysqli_query($con,"select * from RequestService");

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
	

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Name of company</th>
      <th scope="col">Address</th>
      <th scope="col">STD code</th>
      <th scope="col">Telephone no</th>
      <th scope="col">Mobile no.</th>
      <th scope="col">Email</th>
      <th scope="col">Product</th>
      <th scope="col">Nature of complaint</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    while($row=mysqli_fetch_array($result))
    {
    	echo "<tr>
      		<td> $row[0]</td>
      		<td>$row[1]</td>
      		<td>$row[2]</td>
      		<td>$row[3]<br>
      			$row[4]<br>
      			$row[5]<br>
      			$row[6]<br>
      			$row[7]<br>
      		</td>
      		
      		<td>$row[8]</td>
      		<td>$row[9]</td>
      		<td>$row[10]</td>
      		<td>$row[11]</td>
      		<td>$row[12]</td>
      		<td>$row[13]</td>
      		


   		 </tr>";
	}
    ?>
   
  </tbody>
</table>
		
	

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