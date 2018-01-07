<?php
	$name=$_POST['name'];
	$srname=$_POST['sname'];
	$nfp=$_POST['nfp'];
	$bfp=$_POST['bfp'];
	$stn=$_POST['stn'];
	$ct=$_POST['ct'];
	$st=$_POST['st'];
	$pc=$_POST['pc'];
	$stdc=$_POST['stdc'];
	$tn=$_POST['tn'];
	$mno=$_POST['mno'];
	$email=$_POST['email'];
	$pdt=$_POST['pdt'];
	$nop=$_POST['nop'];
	$con = mysqli_connect("localhost","root","","bhavik");
	if(!$con)
				{
					echo "Not Successful";
				}
				else
				{
					echo "Successful";
				}
				
				$sql="INSERT INTO RequestService VALUES
								('$name','$srname','$nfp','$bfp','$stn','$ct','$st','$pc','$stdc','$tn','$mno','$email','$pdt','$nop');";
				if(mysqli_query($con,$sql))
				{

?>

<script type="text/javascript">
	window.location="form.php";
	alert("Request Succesfully Submitted");
</script>


<?php


					
				}
				else
				{



?>

<script type="text/javascript">
	window.location="form.php";
	alert("Server Error ! Please fill Data again...");
</script>


<?php

					
				}
	
?>