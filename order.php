<?php 
require 'header.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="includes/order.inc.php" method="POST">
		

  <label for="mat">Choose your material from the list:</label><br><br>

  <input list="mats" name="mat" id="mat">
  <datalist id="mats">
    <option value="m 1">
    <option value="m 2">
    <option value="m 3">
    <option value="m 4">
    <option value="m 5">
  </datalist><br><br>

		
		<input type="text" name="quan" placeholder="Enter quantity"><br><br>
		<input type="text" name="brand" placeholder="Enter brand"><br><br>
		<input type="text" name="username" placeholder="Enter username"><br><br>
		<input type="text" name="siteid" placeholder="Enter siteid"><br><br>
		<input type="text" name="sitename" placeholder="Enter sitename"><br><br>
		<input type="submit" name="sorder">



		

	</form>
<?php
require 'includes/dbh.inc.php';
$idUsers=$_SESSION['userId'];
$sql = "SELECT uidUsers FROM users where idUsers='".$idUsers."'";
$result = mysqli_query($conn, $sql);
	 	
	 	$resultCheck = mysqli_num_rows($result);

	 	$row=mysqli_fetch_array($result);
	 	$uidUsers= $row['uidUsers'];
	 	//echo $uidUsers;


$sql = "SELECT * FROM siteorder where muidUsers='".$uidUsers."'";
$result = mysqli_query($conn, $sql);
	 	
	 	$resultCheck = mysqli_num_rows($result);

	 	while($row2=mysqli_fetch_array($result)){

	 	$mat=$row2[1];
	 	echo $mat."<BR>";
}

?>



</body>
</html>