<!DOCTYPE html>
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
<br>
		<div class="container">
  <h2>REQUEST FOR AFTER SALES SERVICE</h2>
  <form class="form-horizontal" method="POST" action="action.php">
   <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="<?php if(isset($_POST['name'])) { echo $_POST['name']; } ?>" readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="sn">Surname:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sn" placeholder="Enter Surname" name="sname" value="<?php if(isset($_POST['sname'])) { echo $_POST['sname']; } ?>"readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-lg-4" for="nfp">Name of Company(If applicable):</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nfp" placeholder="Enter company name" name="nfp" value="<?php if(isset($_POST['nfp'])) { echo $_POST['nfp']; } ?>"readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="bfp">Bldg / Flat / Plot:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="bfp" placeholder="Enter BLDG / FLAT / PLOT" name="bfp" value="<?php if(isset($_POST['bfp'])) { echo $_POST['bfp']; } ?>"readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="stn">Street name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="stn" placeholder="Enter Street name" name="stn" value="<?php if(isset($_POST['stn'])) { echo $_POST['stn']; } ?>"readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="ct">City:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="ct" placeholder="Enter City" name="ct" value="<?php if(isset($_POST['ct'])) { echo $_POST['ct']; } ?>" readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="st">State:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="st" placeholder="Enter State" name="st" value="<?php if(isset($_POST['st'])) { echo $_POST['st']; } ?>"readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="pc">Pin Code:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="pc" placeholder="Enter Pin Code" name="pc" value="<?php if(isset($_POST['pc'])) { echo $_POST['pc']; } ?>"readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="stdc">STD Code:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="stdc" placeholder="Enter STD Code" name="stdc" value="<?php if(isset($_POST['stdc'])) { echo $_POST['stdc']; } ?>"readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="tn">TelePhone No:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="tn" placeholder="Enter TelePhone No" name="tn" value="<?php if(isset($_POST['tn'])) { echo $_POST['tn']; } ?>"readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="mno">Mobile No:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="mno" placeholder="Enter Mobile No" name="mno" value="<?php if(isset($_POST['mno'])) { echo $_POST['mno']; } ?>"readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>"readonly>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pdt">Product:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pdt" placeholder="Enter product" name="pdt" value="<?php if(isset($_POST['pdt'])) { echo $_POST['pdt']; } ?>"readonly>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="nop">Nature Of Complaint:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="nop" placeholder="Enter Nature of complaint" name="nop" value="<?php if(isset($_POST['nop'])) { echo $_POST['nop']; } ?>"readonly>
      </div>
    </div>
	    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
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
