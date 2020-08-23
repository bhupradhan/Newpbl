<?php
require 'header.php';
?>
<?php
require "includes/dbh.inc.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/sites.css">
</head>
<body>

<main>
<?php
if(isset($_SESSION['userId'])){
	 	                                    /* TO RETRIEVE DATA USE THIS */
	$idUsers=$_SESSION['userId'];
	 	
	$sql = "SELECT * FROM users WHERE idUsers='".$idUsers."'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);
	 	
	 	
	$emailUsers = $row[2]; 	
	$uidUsers = $row[1];
	$sitename = $row[4];
	$category = $row[6];
	$siteid = $row[7];






		
	 	echo "HI!".$uidUsers; 
	 	

	 	

		
	 		

	 
echo '<a href="details1.php" style="text-decoration:none">
<div class="box" allign="left">
	<br><br>
	<h3 align="center">ATLANTIS</h3>
	<h1 align="center">2 BHK Apartments</h1>
	<h1 align="center">OC RECEIVED + NO GST</h1>
	
	 	</div>

	</a>
	<a href="details1.php" style="text-decoration:none">
<div class="box align="center">
	<br><br>
	<h3 align="center">ATLANTIS</h3>
	<h1 align="center">2 BHK Apartments</h1>
	<h1 align="center">OC RECEIVED + NO GST</h1>
	
	 	</div>

	</a>';

}
?>

</main>
</body>
</html>