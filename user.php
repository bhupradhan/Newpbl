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
	
	
	



	$sql = "SELECT * FROM enquiry WHERE emailUsers='".$emailUsers."'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	

	
	echo "<h4 align='right'  style='font-size: 25px'> Hi! ".$uidUsers."</h4>";
	 	

echo "<table align='center'>

<tr>
<th>EQ_ID</th>
<th>SITE NAME</th>

<th>ENQUIRY</th>
</tr>";
while($row2=mysqli_fetch_array($result)){
echo "<tr>";


echo "<td>" . $row2['eq_id'] . "</td>";
echo "<td>" . $row2['sitename'] . "</td>";
echo "<td>" . $row2['enquiry'] . "</td>";

echo "</tr>";
}
echo "</table>";


		
	 		

	 
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

echo' <h4>Enquiry System</h4>
<form action="includes/enquiry.inc.php" method="POST">
		

  <label for="sitename">Choose your site from the list:</label><br><br>

  <input list="sitenames" name="sitename" id="sitename" required autocomplete= off>
  <datalist id="sitenames" required autocomplete= off
    <option value="site 1">
    <option value="site 2">
    <option value="site 3">
    <option value="site 4">
    <option value="site 5">
  </datalist><br><br>

		
		<input type="text" name="enq" placeholder="Enter your enquiry" required autocomplete= off><br><br>
		<input type="email" name="mailuid" placeholder="Enter email" required autocomplete= off><br><br>
		<input type="submit" name="enquiry">



		

	</form>';


			
		}
?>
	</main>
</body>
</html>
